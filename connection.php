<?php
$servername="localhost";
$username="root";
$password="";
$db_name = "crud";
$conn = new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection Faild".$conn->connect_error);
}
//echo "sss";