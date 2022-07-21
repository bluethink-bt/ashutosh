<?php
$id=$_GET['id'];
require_once('../config.php' ); 
$sql = "DELETE FROM country WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    ?>
    <script>
      window.location = "../country.php";
    </script>
<?php
} else {
  echo "Error deleting record: " . $conn->error;
}

?>