<?php

	date_default_timezone_set('America/Los_Angeles');
	ignore_user_abort(true);
	set_time_limit(0);

	$logFile		= rtrim(getcwd(), '/').'/___github-log.txt';
	$repo 			= '~/grav-intra';
	$branch			= 'master';
	$cmds			= array(
						'Navigating to ' . $repo => 'cd ' . $repo,
						'Fetching ' . $branch . ' from origin' => 'git fetch origin ' . $branch,
						'Resetting to origin/' . $branch => 'git reset --hard origin/' . $branch,
						'Running Garbage Collection' => 'git gc' . $branch,
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
