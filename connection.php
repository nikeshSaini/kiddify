<?php

$servername="localhost";
$usename="root";
$password="";
$dbname="alan_walker";
$conn=mysqli_connect($servername,$usename,$password,$dbname);

if($conn)
{
    echo "Connection OK";
}
else
{
    echo"Connection Failed".mysqli_connect_error();
}
?>
