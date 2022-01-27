<?php
$hostname = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "kanas" ;


$conn = new mysqli('localhost','root','','kanas');

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo "DB connected";
?>