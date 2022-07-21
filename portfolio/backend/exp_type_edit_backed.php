<?php
  include("../config.php");
    $id = $_POST['id'];
    $exp_type = $_POST['exp_type'];
   
  
   $sql= "UPDATE `exp_type` SET `id`='$id',`exp_type`='$exp_type' WHERE id=$id";

    $result = mysqli_query($conn, $sql) or die("Quary Uncesscussful.");
    header("Location: ../exp_type.php");
?>