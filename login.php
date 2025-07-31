<?php
session_start();
include 'connection.php'; 

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)) {
        echo "<script>alert('Email is required');</script>";
    } else if(empty($password)) {
        echo "<script>alert('Password is required');</script>";
    } else {
        $stmt = $con->prepare("SELECT * FROM tb_user WHERE email = ?");
        $stmt->bind_param("s", $email); 
        $stmt->execute();
        $hasil = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$email'");
        $data = mysqli_fetch_assoc($hasil);
        $cek = mysqli_num_rows($hasil);

        if($cek > 0 && password_verify($password, $data['password'])){
            $_SESSION["login"] = $data['email'];
            echo "<script>
            alert('Login Berhasil');
            document.location.href = 'body.php';
            </script>";
        } else {
            echo "<script>alert('Email or Password Salah');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="test.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="floatleft">
        <form method="post">
            <h2 class="title">Hi, Welcome to Fessme!</h2>
            <input type="email" id="email" name="email" class="input" placeholder="Email">
            <br>
            <input type="password" id="password" name="password" class="input" placeholder="Password">
            <br>
            <p><a id="forgot" href="forgot.php">Forgot Password?</a></p>
            <button class="bn632-hover bn24" name="login">Login</button>
        </form>
    </div>
    <div class="floatright">
        <h1>NEW?</h1>
        <p id="text1">Sign Up and discover your <br> new experience here!</p>
        <div class="btn"><a href="regist.php"><button class="bn632-hover bn24">Sign Up</button></a></div>
    </div>
</body>


</html>
