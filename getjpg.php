<?php

  header("Content-type: image/jpeg");

  $servername = 'localhost';
  $db_name = 'abduldb';
  $username = 'root';
  $password = '';

  $connect = mysqli_connect($servername, $username, $password, $db_name);

  $id = $_GET['id'];
  $sql = "SELECT image FROM monster WHERE id= '$id'";
	
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["Image"];

  echo $jpg;
?>
