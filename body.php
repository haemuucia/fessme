<?php 
session_start();
require 'connection.php';

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

$session = $_SESSION['login'];
$perintah = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$session'");
$pengguna = mysqli_fetch_assoc($perintah)['user_id'];


if(isset($_POST['submit'])){
  $session = $_SESSION['login'];
  $perintah = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$session'");
  $pengguna = mysqli_fetch_assoc($perintah)['user_id'];

  $fr = mysqli_real_escape_string($con, $_POST['freeform']);
  $code_user = $pengguna; // Use the user ID fetched from session instead of POST
  $code_massage = mysqli_real_escape_string($con, $_POST['codemassage']);

  $hasil = mysqli_query($con,"INSERT INTO tb_massage(id_user, massage) VALUES ('$code_user','$fr')");
  if ($hasil) {
 echo "<script>
 alert('Message has been sent anonymously! Check the message page to see');
 document.location.href = 'body.php';
 </script>";
 exit; 
  } else {
      echo "<script>
      alert('Gagal');
      </script>";
  }
}

?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d34a0fb1e6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<?php include 'nav.php' ?>
  <div id="carouselExample" class="carousel slide" style="box-shadow: 0 15px 4px rgba(0, 0, 0, 0.50);">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="body1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" color="black">
        </div>
      </div>
      <div class="carousel-item">
        <img src="body2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            </div>
      </div>
      <div class="carousel-item">
        <img src="body3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>  
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="formact">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br>
        <br> <br>
        <textarea id="freeform" name="freeform" rows="4" cols="50"></textarea><br><br>
        <input type="hidden" name="codeuser" value="<?= $pengguna ;?> ">
        <input type="hidden" name="codemassage" value="<?php echo $fetch_product['id_massage'];?>">
        <div class="wrap">
            <button class="btnsubmit" name="submit">Submit</button>
        </div>
    </form> 
</div>
<br> <br> <br> <br> <br>
<footer>
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">RnR</a></li>
      <li class="menu__item"><a class="menu__link" href="#">FAQ</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>Me Tech Company | 2024 </p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</footer>
