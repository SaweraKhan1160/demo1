<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "demo";

  $conn = mysqli_connect($host,$user,$pass,$db);
  if ($conn){
    echo"";
  }
  else{
    echo "DB Not Connect";
  }
?>