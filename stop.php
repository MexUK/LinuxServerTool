<?php

require_once 'vps-include.php';



$processId = getProcessIdByName($ssh, './Server');
if($processId == -1) {
	exit('Process not found.');
}

$result = $ssh->exec('kill -9 '.$processId);
echo $result;
echo 'Process killed. (Process ID '.$processId.').<br><br>';

