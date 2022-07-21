<?php


if (isset($_POST['submit'])) {
    include('../config.php');
    $amount = $_POST['month'];
    $sql = "INSERT INTO `month`(`month`) VALUES ('$amount')";
    $run = mysqli_query($conn, $sql);
    if ($run == true) {
        ?>
            <script>
            //   alert(' insert successfull.')
               window.location = "../month.php";
            </script>
        <?php
          } else {
            echo "submit fail";
          }
}
?>