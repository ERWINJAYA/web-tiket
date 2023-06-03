<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$jenis_kelamin=$_POST["jenis_kelamin"];
$status=$_POST["status"];



//Menginput data ke tabel
  $hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,jenis_kelamin,status) VALUES('$username','$password','$jenis_kelamin','$status')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>