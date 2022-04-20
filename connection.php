<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_cyber_warrior";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn)
{
    echo "connection sucess";
}

else
{
    echo "connection fail".mysqli_connect_error();

}


?>