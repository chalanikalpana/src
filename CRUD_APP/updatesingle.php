<?php
include 'db.php';
include '../KKCK_tasks/header.php';

if (isset($_GET['id'])) {
    $a = $_GET['id'];
    

    $result = mysqli_query($conn, "SELECT * FROM studentinfo WHERE id = '$a'");
    
    
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
    
    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    } else {
        
        echo "No record found for ID: $a";
        exit; 
    }
} else {
    
    echo "ID parameter is missing.";
    exit; 
}
?>
<h2> Update your information below: </h2><br><br>
<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['groupId']; ?>">    
    </div>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div><br><br>
</form>
<?php 

if (isset($_POST['delete'])) {
    
    $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id = '$a'");
    
    
    if ($query) {
        echo "Record Deleted with id: $a <br>";
        
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
include '../KKCK_tasks/footer.php';;
?>