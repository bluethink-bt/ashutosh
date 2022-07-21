<?php
if (isset($_POST['submit'])) {

  include('../config.php');
   $amount = $_POST['amount'];
   $type = $_POST['type'];
   $month = $_POST['month'];
   $year = $_POST['year'];
   echo "$year";
  $sql= "INSERT INTO `debit`(  `amount`, `type`, `month`, `year`) VALUES ('$amount','$type','$month','$year')";
    $run=mysqli_query($conn, $sql);

  if ($run == true) {
?>
    <script>
     
      window.location = "../debit.php";
    </script>
<?php
  } else {
    echo "submit fail";
  }
}
?>
