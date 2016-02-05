<?php
//error_reporting(E_ALL);
// connect to the database

$db = new mysqli('localhost', 'root', '', 'school');

if($db->connect_errno){
  echo $db->connect_errno;
  die('Sorry, we are having some problems');
}

echo 'Success';

?>
