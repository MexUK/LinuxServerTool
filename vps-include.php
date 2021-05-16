<?php

require_once 'vps-config.php';

require_once 'vendor/autoload.php';

$ssh = new phpseclib3\Net\SSH2($host);
if (!$ssh->login($username, $password)) {
  exit('Login to VPS Failed');
}

echo 'Logged in.<br><br>';








function getProcessIdByName(&$ssh, $processPath) {
	$processes = $ssh->exec("ps -ef\n");
	$processes = explode("\n", $processes);
	foreach($processes as &$process) {
		//$data = explode(' ', $process);
		$data = preg_split('/\s+/', $process);
		
		if($data[0] == 'debian' && $data[count($data) - 1] == $processPath) {
			return (int) $data[1];
		}
	}
	return -1;
}



