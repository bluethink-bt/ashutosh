<?php
if (isset($_POST['submit'])) {

  include('../config.php');
   $amount = $_POST['amount'];
   $type = $_POST['type'];
   $month = $_POST['month'];
  $sql= "INSERT INTO `creadit`(  `amount`, `clints`, `month`) VALUES ('$amount','$type','$month')";
    $run=mysqli_query($conn, $sql);

  if ($run == true) {
?>
    <script>
     
      window.location = "../creadit.php";
    </script>
<?php
  } else {
    echo "submit fail";
  }
}
?>
