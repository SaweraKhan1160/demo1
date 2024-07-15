<?php include 'connection.php';
$id=$_GET['id'];
$select = "SELECT * FROM student WHERE id = '$id'";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
 ?>
 <div>
    <form action="" method="POST">
      <input type="text" name="firstname" placeholder="firstname" value="<?php echo $row['firstname'] ?>"><br><br>

      <input type="text" name="lastname" placeholder="lastname" value="<?php echo $row['lastname'] ?>"><br><br>

      <input type="text" name="age" placeholder="age" value="<?php echo $row['age'] ?>"><br><br>

      <input type="submit" name="update_btn" value="Update">
      <button><a href="view.php">Back</a></button>
    </form>
  </div>
  <?php
  if(isset($_POST['update_btn'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $update = "UPDATE student SET firstname='$fname',lastname='$lname',age='$age' WHERE id ='$id'";
    $data = mysqli_query($conn,$update);
    if($data){
      ?>
      <script type="text/Javascript">
        alert ("Data Updated successfully");
        window.open("http://localhost/demo/view.php","_self");
      </script>
      <?php
    }else{
      ?>
      <script type="text/Javascript">
        alert ("Please try again");
      </script>
      <?php
    }
  }
  ?>