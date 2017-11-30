<?php
if (isset($_POST['bulb1on']))
{
  $file = "bulb_1_status.txt";
/*  $handle =  fopen($file , 'w+');
//  echo "inside on" ;
  $onstring="ON";
  fwrite($handle , $onstring);
  fclose($handle);*/
  $handle =  file_put_contents($file , 'ON');
//  echo "inside on" ;
  /*$onstring="ON";
  fwrite($handle , $onstring);
  fclose($handle);*/
}

if ( isset($_POST['bulb1off']))
{
  $file = "bulb_1_status.txt";
/*  $handle =  fopen($file , 'w+');
  $onstring="OFF";
  fwrite($handle , $onstring);
  fclose($handle);

  */
  $handle =  file_put_contents($file , 'OFF');
}
if(isset($_POST['bulb2off']))
{
  $file= "bulb_2_status.txt";
  $handle=file_put_contents($file , 'OFF');
}
if(isset($_POST['bulb2on']))
{
  $file= "bulb_2_status.txt";
  $handle=file_put_contents($file , 'ON');
}
if(isset($_POST['bulb3off']))
{
  $file= "bulb_3_status.txt";
  $handle=file_put_contents($file , 'OFF');
}
if(isset($_POST['bulb3on']))
{
  $file= "bulb_3_status.txt";
  $handle=file_put_contents($file , 'ON');
}
if(isset($_POST['fanoff']))
{
  $file= "fan_status.txt";
  $handle=file_put_contents($file , 'OFF');
}
if(isset($_POST['fanon']))
{
  $file= "fan_status.txt";
  $handle=file_put_contents($file , 'ON');
}
 ?>
