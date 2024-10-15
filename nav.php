        <?php
        session_start();
            require 'connection.php';
            // Periksa apakah sesi login ada
            if(!isset($_SESSION['login'])) {
                // Jika tidak ada, arahkan kembali ke halaman login atau halaman lain yang sesuai
                header("Location: login.php"); // Ganti login.php dengan halaman login Anda
                exit(); // Pastikan kode setelah header() tidak dijalankan
            }

            // Jika sesi login ada, ambil informasi pengguna
            $session = $_SESSION['login'];
            $query = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$session'");
            $nama = mysqli_fetch_assoc($query)['first_name'];

        ?>
<style>
    
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fess Me</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/d34a0fb1e6.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0px !important;
        }
    </style>
    <header>
        <a class="logo"id="msg" href="body.php"><img src="logo.png" alt="logo" width="75" height="75"></a>
        <p href="javascript;"id="msg" class="welcome" style='text-transform: uppercase; padding-left: 10px;   text-transform: uppercase;
        padding-left: 10px;
        margin-left: -38%;
        letter-spacing: 1.8px;
        margin-right: auto;  font-weight: 500;
        font-size: 16px;
        color: black;
        text-decoration: none;
        font-family: "Poetsen One", sans-serif;
        font-weight: 400;
        font-style: normal '>Welcome <?= $nama; ?></p>
         <nav>
             <ul class="nav_link" id="msg">
                 <li><a href="rnr.php" id="msg">RnR</a></li>
                 <li><a href="about.php" id="msg">About</a></li>
                 <li><a href="massage.php" id="msg">Message</a></li>
                 <a href="logout.php" id="msg"><i class='bx bxs-log-out'></i></a>
             </ul>
         </nav>
         <a class="cta" id="msg" href="premium.php"><button class="btnPremium">Premium</button></a>
     </header>  