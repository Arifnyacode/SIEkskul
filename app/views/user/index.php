<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kan</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/dist/css/userhome.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</head>

<body style="font-family: poppins;">
  <nav class="navbar navbar-expand-lg" style="background-color: #014585; height:90px;">
    <div class="container-fluid mg" style="margin-left: 100px;">
      <a class="navbar-brand" href="#"><img src="<?= BASEURL; ?>/dist/img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 10px;">
          <li class="nav-item">
            <a class="nav-link active  text-light" aria-current="page" style="font-weight: 600;" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#" style="font-weight: 600;">Tentang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" style="font-weight: 600;" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Kegiatan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-light" href="" style="font-weight: 600;">Gallery</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <img src="<?= BASEURL; ?>/dist/img/Frame (2).png" alt=""
            style="height: 30px; position:relative; top:7px; left:-138px;">
          <p style="font-size: 17px; top:10px; color:#fff; font-weight:600; position:relative; left:-130px;">Masuk</p>
          <button
            style="width: 170px; height:45px; position:relative; left:-110px; letter-spacing:0.1em;  color:#fff; background-color:#348CFF; font-size:14px; font-weight:550; border-radius:6px; border:1px solid #348CFF; ">Daftar
            Sekarang</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="section-1">
    <div class="d-flex justify-content-center justify-content-xl-start">
      <img src="<?= BASEURL; ?>/dist/img/Frame 136 (2).png" class="img-fluid image-selamatdatang"
        alt="Responsive image">
    </div>
    <div class="d-flex justify-content-center justify-content-xl-start text-center text-xl-start">
      <p class="txt-desc">Kembangkan Bakat dan Minat<br>
        melalui Program Ekskul!</p>
    </div>
    <div class="d-flex d-xl-flex d-md-none justify-content-sm-center justify-content-center justify-content-xl-end">
      <img src="<?= BASEURL; ?>/dist/img/image (1).png" class="img-fluid" id="image-eskul" alt="Responsive image">
    </div>
  </section>

  <div id="btn-daftar" class="d-flex justify-content-center justify-content-xl-start">
    <button class="btn-daftar">Daftar Sekarang</button>
  </div>

  <section class="section-2">
  <img src="<?= BASEURL; ?>/dist/img/image (1).jpg" class="img-program" alt="Responsive image">
  <img src="<?= BASEURL; ?>/dist/img/Frame 136 (1).png" class="img-tnng-pro" alt="Responsive image">
  <div class="d-flex">
    <p class="fs-2 txt-judulpro fw-bolder d-flex justify-content-start">Apa Itu Program Ekskul</p>
</div>
    <div class="d-flex justify-content-start">
      <p class="fw-normal txt-ket">Program Ekstrakurikuler adalah program di luar jam pelajaran<br>
        yang ditawarkan oleh sekolah untuk melengkapi pendidikan<br>
        formal siswa. Ekstrakurikuler memberikan siswa kesempatan<br>
        untuk mengembangkan minat, bakat, dan keterampilan di luar<br>
        kurikulum akademik. Program ekstrakurikuler membantu siswa<br>
        mengembangkan keterampilan sosial, kepemimpinan, kerja tim,<br>
        serta membantu mereka menjelajahi minat dan bakat mereka <br>di luar kelas.</p>
    </div>
    <div id="btn-selengkapnya">
    <button class="btn-selengkapnya">Baca Selengkapnya</button>
</div>
  </section>

  <section class="section-3">
    <img src="<?= BASEURL; ?>/dist/img/ka.png" class="img-fluid " alt="Responsive image" style="margin: auto;
  display: block; position:relative; top:50px; ">
    <p class="fs-2 text fw-bolder" style=" margin-top:60px; text-align:center; color:#152C5B; ">Macam macam kegiatan
      ekskul</p>

    <div class="box-container">

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Group.png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Sepak Bola</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (3).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Basket</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (4).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Programing Club</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (5).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Taekwondo</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Group (1).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Pramuka</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (6).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Drumband</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (7).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">Bola Voli</a></p>
      </div>

      <div class="box">
        <img src="<?= BASEURL; ?>/dist/img/Frame (8).png" alt=""><br>
        <p style="margin-top: 20px; margin-left:-10px; color:#152C5B;" class="fw-semibold"><a href=""
            style="text-decoration: none;  color:#152C5B; font-size:20px;">PMR</a></p>
      </div>
    </div>
  </section>
  <section class="section-4">
    <img src="<?= BASEURL; ?>/dist/img/p.png" class="img-fluid img-logo" alt="Responsive image">
    <p class="fs-2 text fw-bolder" style="  text-align:center; color:#152C5B; ">Gallery Kegiatan Ekskul</p>
<div class="gallery-wrap"  data-aos="fade-up"
     data-aos-duration="2000">
  <p style="width: 50px; border-radius:100%; height:47px;background-color:#348CFF;" id="backBtn"><img src="<?= BASEURL; ?>/dist/img/kanan.png" style="margin-left: 5px; margin-top:5px;" alt=""></p>
  <div class="gallery" >
    <div>
      <span><img src="<?= BASEURL; ?>/dist/img/kal.png"></span>
      <span><img src="<?= BASEURL; ?>/dist/img/image-4.png"></span>
      <span><img src="<?= BASEURL; ?>/dist/img/image-4.png"></span>
    </div>
    <div>
      <span><img src="<?= BASEURL; ?>/dist/img/image-4.png"></span>
      <span><img src="<?= BASEURL; ?>/dist/img/image-5.png"></span>
      <span><img src="<?= BASEURL; ?>/dist/img/image-6.png"></span>
    </div>
   </div>
   <p style="width: 50px; border-radius:100%; height:47px;background-color:#348CFF;" id="nextBtn"><img src="<?= BASEURL; ?>/dist/img/kiri.png" style="margin-left: 10px; margin-top:5px;" alt=""></p>
</div>
  </section>
  <footer class="section-5">
    <div class="footer-txt d-flex justify-content-center">
    <p class="text-white text-center">Program di luar jam pelajaran yang ditawarkan oleh sekolah untuk<br> melengkapi pendidikan formal siswa SMKN 1 Sampit.</p>
</div>
    <div class="footer-bgn">
</div>
</footer>
<script>
    let scrollContainer = document.querySelector(".gallery");
    let backBtn = document.getElementById("backBtn");
    let nextBtn = document.getElementById("nextBtn");

    scrollContainer.addEventListener("wheel", (evt) => {
      evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
    });

   nextBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 900;
   });

   backBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 900;
   });


  </script> 
</body>

</html>