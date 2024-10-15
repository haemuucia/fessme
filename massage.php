<?php
require 'connection.php';
session_start();
$session = $_SESSION['login'];
$perintah = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$session'");
$pengguna = mysqli_fetch_assoc($perintah)['user_id'];

$query = "SELECT * FROM tb_massage
          INNER JOIN tb_user ON tb_massage.id_user = tb_user.user_id 
          WHERE tb_user.user_id = '$pengguna'";

$result = mysqli_query($con, $query);

if (!$result) {
    die("Query error: " . mysqli_error($con));
}
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="msg.css">

    <?php include 'nav.php'  ?>
   <nav style="width: 100%;">

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="container">
                <h3>from: Anonymous</h3>
                <p style="color: black; "><?php echo $row['massage']; ?></p>
    </div>
    <?php } ?>
