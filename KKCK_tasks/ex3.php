<?php 
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?><br><br><br>



<h3>1.1 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
     Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.
     ” inside an h3 tag. Table & Form Guide</h3><br><br>

  

 <h3>1.2 Bootstrap Styling: Apply Bootstrap styles to the form. 
    Make sure to include the Bootstrap CSS link in your head tag.</h3><br><br>
    
<form action="process.php" method="post">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" name="fname" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" name="lname" aria-label="Last name">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form><br><br>

<h3>1.3 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
Note, you have already done a table in Exercise 1. If you wish, you can use the same table. 
</h3><br><br>

        <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
        ?>
<table class="table table-hover">
        <tr><th><S.n.</th> <th>Name </th> <th>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1 ?></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2 ?></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3 ?></td>
        </tr>
    </table>
    <br><br>
    <h3>
    1.4 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.
    </h3><br><br>

    <?php

    $str1 = "Hello";
    $str2 = "World";
    $string = $str1 . " " . $str2 ;
    echo $string;
    $length = strlen($string);
    echo "Length of the Joined String: $length";
    ?><br><br>

    <h3>
    1.5 Number Addition: 
    Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.
    </h3><br><br>

    <?php
    $a = 298;
    $b = 234;
    $c = 46;

    $sum = $a + $b + $c ;
    echo "Sum of the variables: $sum";

    ?><br><br>

    <h3>
    1.6 Browser Detection: 
    Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER. Predefined Variables
    </h3><br><br>

    <?php
    echo $_SERVER['SERVER_NAME'];
    ?><br><br>

    <h3>
    1.7 File Modification Time: 
        Write a PHP script in the footer section of your universal footer to display the last modification time of a file. 
        Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
        filetime function to get the last modified time & date function to print the date and time Predefined Variables
    </h3><br><br><br>


     
  


  

<?php include 'footer.php'; ?>
 