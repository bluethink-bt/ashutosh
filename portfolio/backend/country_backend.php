<?php


if (isset($_POST['country'])){
    include('../config.php');
    $country = $_POST['country'];
    $sql = "INSERT INTO `country`(`country`) VALUES ('$country')";
    $run = mysqli_query($conn, $sql);

    if ($run == true) {
        ?>
            <script>
              // alert(' insert successfull.')
               window.location = "../country.php";
            </script>
        <?php
          } else {
            echo "submit fail";
          }
}
?>