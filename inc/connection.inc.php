<?php

$host = 'ec2-x-x-x-x.compute-1.amazonaws.com';
$dbName = 'demoDB';
$username = 'root';
$password = 'xxxx';

$db = mysqli_connect($host, $username, $password, $dbName);

if(mysqli_connect_errno()){
  echo "Connection Failed! 👿". mysqli_connect_error();
  exit();
}else{
  echo "Connected Successfully 🎊🎉🙏";
}
