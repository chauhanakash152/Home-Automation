<?php
header('Access-Control-Allow-Origin: *');
$status = file_get_contents("bulb_3_status.txt");
echo $status;
?>
