<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoSmart</title>
    <link rel="stylesheet" href="stylerona.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>

    <!--header start-->
    <?php include 'header.php'; ?>

    <!--header end-->
  
    <div id="KategoriPaket">
        <div class="container">
          <div class="row">
            <!-- title kategori paket -->
            <div class="col-12 pt-5 mb-3">
              <h2 class="bold judul-kategori" id="popup-trigger" style="color: rgb(0, 0, 0) !important;">Kategori Produk</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img
                  src="Data/Live Class.jpeg"
                  class="card-img-top p-2"
                  alt="..."
                />
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-center nama">Live Class</h5>
                  <p class="card-text flex-grow-1">Pilihan paket kelas online seru bersama Rockstar Teacher dilengkapi semua benefit paket belajar UTBK</p>
                  <p class="mt-auto text-center">
                    <a href="LiveClass.php" class="btn btn-primary text-center"
                      >Lihat selengkapnya</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img
                  src="Data/UTBK+TO.jpeg"
                  class="card-img-top p-2"
                  alt="..."
                />
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-center nama">Siap UTBK + TO</h5>
                  <p class="card-text flex-grow-1">Pilihan paket persiapan UTBK terarah dan lengkap dengan Try Out dan materi belajar seru</p>
                  <p class="mt-auto text-center">
                    <a href="UTBK+TO.php" class="btn btn-primary text-center"
                      >Lihat selengkapnya</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img
                  src="Data/Siap Belajar.jpeg"
                  class="card-img-top p-2"
                  alt="..."
                />
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-center nama">Siap Belajar</h5>
                  <p class="card-text flex-grow-1">Pilihan paket belajar seru lewat video, rangkuman, dan bank soal</p>
                  <p class="mt-auto text-center">
                    <a href="SiapBelajar.php" class="btn btn-primary text-center"
                      >Lihat selengkapnya</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img
                  src="Data/Diamond.jpeg"
                  class="card-img-top p-2"
                  alt="..."
                />
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-center nama">Diamond</h5>
                  <p class="card-text flex-grow-1">Pilihan paket Diamond yang bisa kamu gunakan untuk ikutan Try Out persiapan UTBK</p>
                  <p class="mt-auto text-center">
                    <a href="Diamond.php" class="btn btn-primary text-center"
                      >Lihat selengkapnya</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    <!--footer-->



        <footer class="footer">
            <section>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
                </div>
                <div class="credit">&copy; copyright @2023 by <span> kelompok 2 SIM  </span> | all rights reserved!</div>
            </section>
        </footer>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>