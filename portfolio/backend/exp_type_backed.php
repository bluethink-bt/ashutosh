<?php


if (isset($_POST['submit'])) {
    include('../config.php');
    $exp_type = $_POST['exp_type'];
    $sql = "INSERT INTO `exp_type`(`exp_type`) VALUES ('$exp_type')";
    $run = mysqli_query($conn, $sql);
    if ($run == true) {
        ?>
            <script>
            //   alert(' insert successfull.')
               window.location = "../exp_type.php";
            </script>
        <?php
          } else {
            echo "submit fail";
          }
}
?>