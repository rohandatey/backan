<?php

$host="localhost";
$user="root";
$password="";
$db="userpage";

// creat a connection
$con=mysqli_connect($host,$user,$password,$db);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  //veriable to be inserted into the table
  $username='rohan';
  $password='datey';
  
  
  
  //sql query to be executed

$sql =  "INSERT INTO `userdata` ( `username`, `password`) VALUES ('$username', '$password')"; 

if($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();






?>