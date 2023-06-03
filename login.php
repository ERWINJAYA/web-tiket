<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="login">
    <div class="container">
        <h1 class="text-center text-light mt-5">Selamat Datang</h1>
        <p class="text-center text-light mt-3">silahkan login terlebih dahulu!</p>
    <form class="form-container" action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label textform">Username</label>
            <input type="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label textform">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
        </div>
        <div class="d-grid text-center">
            <button type="submit" class="btn btn-primary text-center formlogin" name="submit">Login</button>
        </div>
        <div class="text-center textform mt-2">
            <small>Belum punya akun? <a href="register.php" class="fw-bold text-dark text-decoration-none">Daftar disini</a></small>
        </div>
    </form>

     <!-- Eksekusi Form Login -->
     <?php 
        if(isset($_POST['submit'])) {
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: admin.php');
                }elseif ($status == 'user') {
                  header('location: user.php'); 
                }
            }else{
                header("location: login.php");
            }
        }
       ?>
    </div>
  <!-- Akhir Eksekusi Form Login -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>