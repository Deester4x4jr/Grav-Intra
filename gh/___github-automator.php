<?php

	date_default_timezone_set('America/Los_Angeles');
	ignore_user_abort(true);
	set_time_limit(0);
	define('PRIVATE_KEY', 'supersecrettegilesauce');
	$canIGo = false;

	if ($_SERVER['REQUEST_METHOD'] === 'POST'
        && $_REQUEST['thing'] === PRIVATE_KEY) {
		$canIGo = true;
	}

	if ($canIGo) {
		$logFile		= rtrim(getcwd(), '/').'/___github-log.txt';
		$repo 			= '~/grav-intra';
		$branch			= 'master';
		$gitPath		= '/usr/bin/git';
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
	} else {
		$msg = "Fuck off doghnut!  You can't have my codes!";
	}
?>

<html>
	<body>
		<h1><?php echo $msg; ?></h1>
	</body>
</html>