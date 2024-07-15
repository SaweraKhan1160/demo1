<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
  ?>
  <script type="text/Javascript">
    alert("Delete Data Successfully");
    window.open("http://localhost/demo/view.php","_self");
  </script>
  <?Php
}else{
  ?>
  <script type="text/Javascript">
    alert("Please try again")
  </script>
  <?php
}
?>