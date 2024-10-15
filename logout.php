<?php
    // Hapus sesi login
    session_start();
    session_unset();
    session_destroy();

    // Arahkan kembali ke halaman utama
    header("Location: login.php");
    exit(); // Pastikan kode setelah header() tidak dijalankan
?>