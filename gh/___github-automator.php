<?php

/**
 * GitHub webhook handler template.
 * 
 * @see  https://developer.github.com/webhooks/
 * @author  Miloslav Hůla (https://github.com/milo)
 */

$hookSecret = 'gorillamafia';  # set NULL to disable check
$spyHandler = "<html><body><h1>Fuck off doghnut!  You can't have my codes!</h1></body></html>";


set_error_handler(function($severity, $message, $file, $line) {
	throw new \ErrorException($message, 0, $severity, $file, $line);
});

set_exception_handler(function($e) {
	header('HTTP/1.1 500 Internal Server Error');
	echo "Error on line {$e->getLine()}: " . htmlSpecialChars($e->getMessage());
	die();
});

$rawPost = NULL;
if ($hookSecret !== NULL) {
	if (!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
		echo = $spyHandler;
		throw new \Exception("HTTP header 'X-Hub-Signature' is missing.");
	} elseif (!extension_loaded('hash')) {
		throw new \Exception("Missing 'hash' extension to check the secret code validity.");
	}

	list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
	if (!in_array($algo, hash_algos(), TRUE)) {
		throw new \Exception("Hash algorithm '$algo' is not supported.");
	}

	$rawPost = file_get_contents('php://input');
	if ($hash !== hash_hmac($algo, $rawPost, $hookSecret)) {
		echo = $spyHandler;
		throw new \Exception('Hook secret does not match.');
	}
};

if (!isset($_SERVER['CONTENT_TYPE'])) {
	throw new \Exception("Missing HTTP 'Content-Type' header.");
} elseif (!isset($_SERVER['HTTP_X_GITHUB_EVENT'])) {
	echo = $spyHandler;
	throw new \Exception("Missing HTTP 'X-Github-Event' header.");
}

switch ($_SERVER['CONTENT_TYPE']) {
	case 'application/json':
		$json = $rawPost ?: file_get_contents('php://input');
		break;

	case 'application/x-www-form-urlencoded':
		$json = $_POST['payload'];
		break;

	default:
		echo = $spyHandler;
		throw new \Exception("Unsupported content type: $_SERVER[CONTENT_TYPE]");
}

# Payload structure depends on triggered event
# https://developer.github.com/v3/activity/events/types/
$payload = json_decode($json);

switch (strtolower($_SERVER['HTTP_X_GITHUB_EVENT'])) {
	case 'ping':
		echo 'pong';
		break;

	case 'push':
		echo "We got some shit:\n";
		print_r($payload);
		pushMethods();
		break;

//	case 'create':
//		break;

	default:
		header('HTTP/1.0 404 Not Found');
		echo = $spyHandler;
		echo "Event:$_SERVER[HTTP_X_GITHUB_EVENT] Payload:\n";
		print_r($payload); # For debug only. Can be found in GitHub hook log.
		die();
}

function pushMethods(

	$logFile		= rtrim(getcwd(), '/').'/log.github.out';
	$repo 			= '~/grav-intra';
	$branch			= 'master';
	$gitPath		= 'PKEY=~/.ssh/deploy /usr/bin/git';
	$cmds			= array(
						'Navigating to ' . $repo => 'cd ' . $repo . '2>&1',
						'Fetching ' . $branch . ' from origin' => $gitPath . ' fetch origin ' . $branch . '2>&1',
						'Resetting to origin/' . $branch => $gitPath . ' reset --hard origin/' . $branch . '2>&1',
						'Running Garbage Collection' => $gitPath . ' gc' . $branch . '2>&1',
					);

	// start logging
	file_put_contents($logFile,
		"\n" . '==============================================' . "\n" .
		'Init Sync with Upstream -- ' . date('Y-m-d, H:i:s', time()) . "\n" . 
		'----------------------------------------------' . "\n\n",
		FILE_APPEND);

	// update github Repo
	foreach ($cmds as $k=>$v) {
		
		$result = shell_exec($v);
		
		if (empty($result)) {
			$result = "\n" . $k . ' .......... Success!!';
		} else {
			$result = "\n\n" . $k . ' .......... Success:' . "\n" . $result;
		}

		file_put_contents($logFile, $result, FILE_APPEND);
	}

	// end logging
	file_put_contents($logFile,
		"\n\n" . '----------------------------------------------' . "\n" .
		'Stop Sync with Upstream -- ' . date('Y-m-d, H:i:s', time()) . "\n" .
		'==============================================' . "\n",
		FILE_APPEND);
}