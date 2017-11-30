<?php
header('Access-Control-Allow-Origin: *');
$status = file_get_contents("fan_status.txt");
echo $status;
?>
