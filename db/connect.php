<?php
// The error_reporting() function specifies which errors are reported.
// E_ALL = report all errors
// 0 = turn off error reporting
// error_reporting(E_ALL);
// connect to the database

// mysqli is a replacement for the mysql functions,
// with object-oriented and procedural versions. It has support for prepared statements.
// mysqli has object oriented functionality
// database object
// new mysqli object
// mysqli ('host', 'user', 'pass', 'database') constructor function, pass in parameters
$db = new mysqli('localhost', 'root', '', 'registration');

// supplies with an error number if the connection has failed
// if it is 0, we have connected, if it is +, then there is error
if($db->connect_errno){
  // for debugging purposes
  echo $db->connect_errno;
  die('Sorry, we are having some problems');
}

// echo 'Success';

?>
