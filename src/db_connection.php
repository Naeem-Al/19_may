<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="productposh";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("connection failed");
}



?>