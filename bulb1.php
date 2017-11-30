<?php
header('Access-Control-Allow-Origin: *');
$status = file_get_contents("bulb_1_status.txt");
echo $status;
?>
