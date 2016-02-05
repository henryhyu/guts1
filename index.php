<?php
// Goal:
// Create a new database, create a table with 4 columns, id, firstname, lastname, email.
// Add a record to that table.
// In php, connect to the database using just mysqli_connect,
// then run a query to grab all the entries from the table
// and echo them to the screen.

// error_reporting(0);
// The include (or require) statement takes all the text/code/markup that
// exists in the specified file and copies it into the file that uses the include statement.
// require will produce a fatal error (E_COMPILE_ERROR) and stop the script
require 'db/connect.php';

// access the database object we created
// query method to instantiate the database object
// select * FROM user = select everything from the user table
// could do SELECT first_name, last_name FROM users, etc.

// $result = $db->query("SELECT * FROM user") or die($db->error);
// or die is not very user friendly
// print_r ($result);
// if($result->num_rows){
//  echo "Yay";
// }

// if result is success
// fetch_assoc() = associative array
// Array with first name, last name

if($result = $db->query("SELECT * FROM users")){
  if($count = $result->num_rows){
    // echo out number of rows in the query
    echo '<p>', $count, '</p>';
    // moving the pointer
    // access array elements of an object
    while($row = $result->fetch_object()){
      echo $row->first_name, ' ', $row->last_name, ' ', $row->email, '<br>';
    }
    // free up memory, no longer need result set in memory
    $result->free();
  }
}

?>
