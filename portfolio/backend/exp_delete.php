<?php

$id=$_GET['id'];

require_once('../config.php' ); 

$sql = "DELETE FROM exp_type WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
     
      window.location = "../exp_type.php";
    </script>
<?php
} else {
  echo "Error deleting record: " . $conn->error;
}

?>