<?php

require_once 'vps-include.php';

$result = $ssh->exec("cd iv1\nnohup ./Server &\n");
echo $result;

echo 'Process started.<br><br>';

