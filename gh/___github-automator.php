<?php
date_default_timezone_set('America/Los_Angeles');
ignore_user_abort(true);
set_time_limit(0);

$repo          = '~/grav-intra';
$branch        = 'master';
$output        = array();

// update github Repo
$results['Navigating to ' . $repo] = shell_exec('cd ' . $repo);
$results['Fetching ' . $branch . ' from origin'] = shell_exec('git fetch origin ' . $branch);
$results['Resetting to origin/' . $branch] = shell_exec('git reset --hard origin/' . $branch);
$results['Running Garbage Collection'] = shell_exec('git gc');

// build logs
$output[] = "\n" . 'Begin Sync with Upstream - ' . date('Y-m-d, H:i:s', time()) . "\n";
foreach ($result as $k=>$v) {
	if (empty($v) {
		$v = "No news is good news!  Success!!";
	}
	$output[] = $k"\n============================\n" . $v;
}

// redirect output to logs
file_put_contents(rtrim(getcwd(), '/').'/___github-log.txt', implode("\n", $output) . "\n-- End Sync with Upstream --\n", FILE_APPEND);
