<?php 
$title = "Exercise 4: Control flow and loops";
include 'header.php'; 
?><br><br>

<h3>1. Create a file (ex4.php): Create a file named ex4.php in your exercise folder.
     Ensure that it uses the same layout as your other pages and that your navigation 
     bar includes a link to this exercise.
</h3><br><br>

<h3>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. 
    (18 or more than 18 years is eligible for voting, use form to get user input).
</h3><br><br>
         
<?php
    $name = " ";
    $age = " ";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $name = $_POST["name"];
        $age = $_POST["age"];

     }
?>

<form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Age" name="age" aria-label="Age">
  </div>
  <div class="col-auto">
     <input type="submit" name="Check" value="Check" class="btn btn-primary">
  </div>
</div>
</form><br><br>

<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
   if (isset($_POST['Check']))
    {
      if ($age >= 18)
        {
         echo " <h4>You are eligible for voting!</h4><br><br>";
        }
        else
        {
            echo " <h4>You are not eligible for voting!</h4><br><br>";
        }
    }
  }
?>
        
<h3>3. Switch Case: Write a PHP script that gets the current month 
    and prints one of the following responses, depending on whether it's August or not:
</h3><br><br>

<?php
    $currentmonth = date("F");
    
    switch($currentmonth)
        { 
        case "August":
            echo "<h4>It's August, so it's still holiday.</h4><br><br>";
            break;
            default:
            echo "<h4>Not August, this is " . $currentmonth . " so I don't have any holidays</h4><br><br>";
        }


?>

<h3>4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).

</h3><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="number">Enter a Number:</label>
    <input type="text" name="number"  required>
    <br><br>
    <input type="submit" name="Save" value="Generate Multiplication Table">
</form>
 
<?php
$number=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset ($_POST['Save']))
    {
       
        $number = $_POST["number"];
        
      
    if (is_numeric($number))
     {
        
        echo "<h4>Multiplication Table for $number:</h4>";
        echo "<table border='1'>";
    
        for ($n = 1; $n <= 10; $n++) 
        {
            $result = $number * $n;
            echo "<tr><td>$number x $n</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    
    }
}
?>


<h3>5. While Loop: Write a PHP script that will print all the numbers from 1 to n. 
    (use form to get user input)</h3><br><br>

    <form method="post" name="printNumber" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    Input Number: <input type="number" name="number"required><br><br>
    <input type="submit" name="submitNumber" value="Submit"><br><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset ($_POST["submitNumber"])) {
            $number = $_POST["number"];
            echo "<h4> Print numbers from 1 to $number</h4>";
            $i = 1;
            do {
                echo "$i <br>";
                $i++;
            } while ($i <= $number);
        }     
    }
?><br><br>

 
<h3>6. Foreach Loop: Write a PHP script that will print all the elements of an array.
     $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3><br><br>

<?php
     $myarray = array ("HTML", "CSS", "PHP", "JavaScript");

     foreach ($myarray as $x)
     {
       echo "$x <br>";
     }
?>

<?php include 'footer.php'; ?>



