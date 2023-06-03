
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="register">
    <div class="container">
        <h1 class="text-center text-light mt-5">Selamat Datang</h1>
        <p class="text-center text-light">silahkan daftar terlebih dahulu!</p>
    <form class="form-register mt-4" action="simpan_register.php" method="POST">
        <div>
            <label for="name" class="form-label text-form">masukkan username</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan username" name="username">
        </div>
        <div>
            <label for="password" class="form-label text-form">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki">
          <label class="form-check-label" for="jk">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan">
          <label class="form-check-label" for="jk">Perempuan</label>
        </div>
      </div>
        <div class="form-group">
          <label for="sts">Status Registrasi</label>
          <select id="sts" class="form-control" name="status">
            <option selected>Pilih...</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="d-grid text-center mt-3">
            <button type="submit" class="btn btn-primary text-center formlogin" name="register">Daftar</button>
        </div>
        <div class="text-center textform mt-1">
            <small>Sudah punya akun? <a href="login.php" class="fw-bold text-dark text-decoration-none">Masuk disini</a></small>
        </div>
    </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>