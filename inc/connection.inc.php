<?php

$dns = 'mysql:host=localhost;dbname=demodb';
$username = 'root';
$password = '';

//$db = new PDO($dns, $username, $password);
$db = mysqli_connect($dns, $username, $password);

if(!$db){
  echo "Connection Failed! 🤣";
}
echo "Connected Successfull";

?>
