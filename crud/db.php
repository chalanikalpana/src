<?php
//shel.hamk.fi >>> localhost
$servername ="localhost";
$username = "chalani23000";
$password = "AjwDCBbn";
$dbname = "wp_chalani23000";

//create database connection

$conn = new mysqli($servername,$username,$password,$dbname);

//check connection

if($conn->connect_error)
{
  die("Connection Failed:" . $conn->connect_error);
}

?>