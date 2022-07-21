<?php
  include("../config.php");
    $id = $_POST['id'];
    $country = $_POST['country'];
   $sql= "UPDATE `country` SET `id`='$id',`country`='$country' WHERE id=$id";
    $result = mysqli_query($conn, $sql) or die("Quary Uncesscussful.");
    header("Location: ../country.php");
?>