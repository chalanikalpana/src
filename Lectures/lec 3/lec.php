<?php
//variable type.
 // $var = 5;
  //$var1 = "Hello";
 // echo $var . "<br>" . $var1;

?>
 
<?php

   //global scope
   //$var2 = 3;
   //echo $var2 . "<br>" . $var1;

   //local scope-only disply inside the function
   //function myfunction()
   {
     // $a = 1;
     // echo $a;
      //this is not assesible. so we have to use a keyword call "Global"
      //echo $var2;
      //global $var2;
      //echo $a . "<br>" . $var2;
   }
//this local function not display in the webpage.
   //echo $a;

   //calling function
   //myfunction();
   //echo $a;

//static scope
//function counter()
//{
   //$b = 2;
  // $b++;
   //echo $b . "<br>";

//}
// calling function
//counter();//output : 3
//counter();//output :3

//type the variable as increasing add static 

function counter()
{
  static $c = 5;
   $c++;
   echo $c . "<br>";
}

counter();6
counter();7

?>



<?php
   

?>
