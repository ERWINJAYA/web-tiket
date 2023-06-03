<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tiket The Movies</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top" data-aos="fade-down">
        <div class="container" data-aos="fade-down">
          <a class="navbar-brand fw-bold" href="#">Tix <span class="text-info fw-bold">Movie</span></a>
          <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbartoggler" aria-controls="navbartoggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbartoggler">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu_pembeli.php">Daftar Film</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pesanan_pembeli.php">Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rekomendasi">Populer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rekomendasi">About us</a>
              </li>
              <li class="nav-item ms-lg-5">
                <a id="submit" class="btn btn-success" href="#">Logout</a>
              </li>
              
          </div>
        
            
          </div>
        </div>
      </nav>
      <!-- akhir navbar -->

      <!-- banner -->
        <div class="container-fluid banner mt-2">
          <div class="row">
              <div class="col-12 text-light text-center mt-3" data-aos="fade-down-right">
                <h3>Temukan Tiket Anda dan</h3>
                <h3>Nonton Film Kesukaan Anda</h3>
              </div> 
              <nav class="navbar navbar-light mt-2">
                <div class="container justify-content-center">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger tombol" type="submit">Search</button>
                  </form>
                </div>
              </nav> 
          </div>  
        </div>   
        </div>
      <!-- akhir banner -->


    <!-- daftar film -->
    <section id="about" class="mt-3 overflow-hidden">
        <div class="container mt-3" data-aos="zoom-in">
            <div class="row">
                <div class="col-9">
                    <h3>Daftar Film</h3>
                </div>
                <div class="col-3 text-end button">
                    <a href="menu_pembeli.php" class="btn btn-success">Lihat Semua... </a>
                </div>

                    <div class="col-12 d-sm-flex justify-content-center">
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/interceptor.jpg" alt="" data-aos="fade-right">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>INTERCEPTOR</h5>
                                    <a href="menu_pembeli.php" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                          </div>
              
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/lastseenalive.jpg" alt="" data-aos="fade-right">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>LAST_SEEN ALIVE</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                      
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/the overnight.jpg" alt="" data-aos="fade-right">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>THE_OVERNIGHT</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/top gun.jpg" alt="" data-aos="zoom-in">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>TOPGUN</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/wolfhound.jpg" alt="" data-aos="fade-left">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>WOLFHOUND</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/zero contact.jpg" alt="" data-aos="fade-left">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>ZERO_CONTACT</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="./image/revenge girl.jpg" alt="" data-aos="fade-left">
                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h5>REVENGE_GIRLS</h5>
                                    <a href="" class="btn btn-danger tombol"> Beli Tiket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

      <!-- isi -->
      <section id="rekomendasi" class="sections desktop">
        <div class="container-fluid mt-5" data-aos="zoom-out">
          <div class="titleBox text-start text-light">
            <h2 class="title mt-4">REKOMENDASI PEKAN INI</h2>
            <hr>
          </div>
            <div class="row m-3">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./image/film1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-light">HALLOWEEN ENDS</h5>
                          <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./image/film2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-light">THE WOMAN KING</h5>
                          <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./image/film3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title text-light">AMSTERDAM</h5>
                          <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                        </div>
                      </div>
                </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="./image/film4.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title text-light">JALANGKUNG</h5>
                      <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="./image/film5.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title text-light">KALIAN PANTAS MATI</h5>
                      <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="./image/film6.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title text-light">PAMALI</h5>
                      <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="./image/film7.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title text-light">QODRAT</h5>
                      <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="./image/film8.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title text-light">MENCURI RADEN SALEH</h5>
                      <a href="menu_pembeli.php" class="btn btn-danger">Beli Tiket</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </section>







 <!-- footer -->
 <footer id="kontak">
    <div class="container-fluid bg-dark mt-1">
    <div class="row ms-2 mt-1">
      <div class="col-md-3 mt-3">
      <h3 class="fw-bold text-center text-warning" style="text-decoration: underline;">Tentang Tix movie</h3>
      <p class="text-white fw-normal mt-1 info">TixMovie merupakan sebuah web yang memungkinkan anda dapat memesan tiket film yang anda tonton dengan mudah dan praktis</p>
      </div>
      <div class="col-md-3 mt-3">
      <h3 class="fw-bold text-center text-warning" style="text-decoration: underline;">About us</h3>
      <p class="text-white fw-normal mt-1 info">TixMovie merupakan sebuah web yang memungkinkan anda dapat memesan tiket film yang anda tonton dengan mudah dan praktis</p>
      </div>
      <div class="col-md-3 mt-3">
      <h3 class="fw-bold text-center text-warning" style="text-decoration: underline;">Pembayaran</h3>
      <div class="row pembayaran">
          <div class="col-4">
      <a href=""><img src="./image/ovo.png" alt="" class="h-90 w-100" ></a>
            </div>
            <div class="col-4">
      <a href=""><img src="./image/dana4.png" alt="" class="h-90 w-100"></a>
    </div>
    <div class="col-4">
      <a href=""><img src="./image/gopay.png" alt="" class="h-90 w-100"></a>
    </div>
    </div>
      </div>
      <!-- contact -->
      <div class="col-md-3 mt-3">
      <h3 class="fw-bold text-center text-warning" style="text-decoration: underline;">Ikuti Kami</h3>
       <!-- medsos -->
       <div class="col-md-12 text-center mt-2">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></a>  
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></a>  
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg></a>  
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg></a>  
          </li>
        </ul>
      </div>
    </div>
    </div>
    <hr class="text-light">
    <div class="row">
        <div class="col-12 text-light text-center">
            <p>Copyright &copy; 2022 Kelompok 3</p>
        </div>
    </div>
    </div>
  </footer>
<!-- footer -->



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const submit = document.getElementById('submit');
  submit.addEventListener('click',  function click(){
    Swal.fire({
title: 'Yakin Ingin Keluar ?',
showDenyButton: true,
}).then((result) => {
/* Read more about isConfirmed, isDenied below */
if (result.isConfirmed) {
  Swal.fire('keluar', '', 'berhasil')
  setTimeout(function(x){
  document.location.href = "../TIXMOVIE/login.php";
 },2000)
}
})
 })

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>

  AOS.init();
</script>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".event-box"), {
		max: 25,
		speed: 400
	});
</script>
</body>
</html>
<?php } ?>