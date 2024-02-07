<?php
//what to do with the date_add
if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $city = $_POST['city'];
  $groupid = $_POST['groupid'];

  //connect to the database server

  include 'db.php';

  //write sql statment to insert data

  $sql = "insert into studentinfo (first_name, last_name, city, groupId)
  values('$fname', '$lname', '$city', '$groupid')";


  if($conn->query($sql)===TRUE)
  {
    echo "Your data was recorded";


  }
  else
  {
    echo "Error:" .$sql . "<br>" . $conn->error;
  }
 
}

//close the database connection
$conn->close();

?>