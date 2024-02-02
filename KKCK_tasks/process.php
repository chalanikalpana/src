<?php
$title = "Your Information";
include 'header.php';

   $firstname = $_POST["fname"];
   $lastname = $_POST["lname"];

   echo "<h3>Hello ". $firstname ." ".$lastname ."  You are welcome to my site.</h3>";

include 'footer.php';
?>

 