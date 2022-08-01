<?php
$server="localhost";
$username="root";
$password="";
$db="emobilis";

// connecting to the database
$conn= new mysqli($server,$username,$password,$db);

// for checking the connection
if ($conn->connect_error){
    die("It did not connect to the database".$conn->connect_error);
}else{
    echo "Connected successfully to the database";
}