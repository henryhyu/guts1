<?php
//error_reporting(0);
require 'db/connect.php';

// Create a new database, create a table with 4 columns, id, firstname, lastname, email.
// Add a record to that table.
// In php, connect to the database using just mysqli_connect,
// then run a query to grab all the entries from the table
// and echo them to the screen.

if($result = $db->query("SELECT * FROM user")){
  if($count = $result->num_rows){
    echo '<p>', $count, '</p>';

    while($row = $result->fetch_object()){
      echo $row->first_name, ' ', $row->last_name, ' ', $row->email, '<br>';
    }

    $result->free();
  }
}

?>
