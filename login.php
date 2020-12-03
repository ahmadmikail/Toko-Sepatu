<?php
include './config.php';
  $table_name = 'user';

  session_start();
  // menyimpan data yang diinputkan kedalam variabel
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  // query sql untuk autentifikasi
  $query = "SELECT email, password FROM user where email='$email' AND password='$password';";
  $result = mysqli_query($mysqli, $query);

  if(mysqli_num_rows($result))
    {
    if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['email']=$row['email'];
      $_SESSION['password']=$row['password'];
    }
    echo ("Login berhasil<br>");
    echo ('Memuat halaman, klik tombol <a href="sepatu/index.php">ini</a> jika halaman tidak otomatis muncul.');
    header('refresh: 3; url= sepatu/index.php');
    }
    else{
    echo("<script>alert('Invalid Username or Password. Try Again!');</script>");
    header('refresh: 0; url= index.php');
  }

  ?>