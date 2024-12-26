<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WR2</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap/bootstrap533/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-scroll navbar-transparent">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="img/logo.png" alt="WR2" width="50"> WR2
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link <?= ($menu == 'home') ? 'active' : ''; ?>" href="#beranda">Home</a>
          </li>
          <li class="nav-item"><a class="nav-link <?= ($menu == 'about') ? 'active' : ''; ?>" href="#about">About</a>
          </li>
          <li class="nav-item"><a class="nav-link <?= ($menu == 'service') ? 'active' : ''; ?>"
              href="#services">Service</a></li>
          <li class="nav-item"><a class="nav-link <?= ($menu == 'product') ? 'active' : ''; ?>"
              href="#product">Product</a></li>
          <li class="nav-item"><a class="nav-link <?= ($menu == 'price') ? 'active' : ''; ?>" href="#price">Price</a>
          </li>
          <li class="nav-item"><a class="nav-link <?= ($menu == 'contact') ? 'active' : ''; ?>"
              href="#contact">Contact</a></li>
        </ul>
        <a class="btn-pesan" href="pesan.php">Pesanan</a>
      </div>
    </div>
  </nav>


  <section id="beranda" class="beranda">
    <div class="beranda-bg">
      <img src="img/bg.webp" alt="">
    </div>

    <div class="container text-center">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          Welcome to <span>WR2 PRINT</span>
        </h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          Mencetak Masa Depan Menjadi Kenyataan
        </p>
        <img src="img/service.webp" class="img-fluid beranda-img" data-aos="zoom-in" data-aos-duration="1000"
          data-aos-delay="600" alt="">
      </div>
    </div>
  </section>

  <section id="about" class="about section">
    <div class="container">
      <div class="row gy-4">
        <p id="tentang" class="tentang pt-5" data-aos="fade-down" data-aos-duration="800">
          ABOUT US
        </p>
        <h3 data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          TENTANG KAMI
        </h3>
        <p class="kami pb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          Selamat datang di WR2 PRINT, layanan cetak profesional yang siap memenuhi kebutuhan Anda! Kami adalah penyedia
          jasa printer yang berfokus pada kualitas hasil cetak dan kepuasan pelanggan.
          Dengan pengalaman bertahun-tahun di industri percetakan kami hadir untuk melayani berbagai kebutuhan cetak
          Anda, mulai dari dokumen sehari-hari hingga cetakan khusus untuk keperluan promosi dan bisnis.
          Kami memahami bahwa setiap pelanggan memiliki kebutuhan yang unik. Oleh karena itu, kami menawarkan beragam
          layanan cetak yang bisa disesuaikan dengan preferensi dan keinginan Anda.
          Baik itu cetakan untuk kebutuhan pribadi seperti tugas sekolah atau cetakan untuk keperluan bisnis dan
          promosi, WR2 Print hadir untuk memberikan solusi yang tepat dengan hasil yang memuaskan sesuai dengan
          kebutuhan Anda.
        </p>
      </div>
    </div>
  </section>

  <section id="services" class="services section">
  <div class="container section-title" data-aos="fade-up">
    <p id="jasa" class="jasa pt-5">SERVICES</p>
    <h3>PILIHAN JASA KAMI</h3>
  </div>

  <div class="container pb-5">
    <div class="row g-5">
      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-file-text"></i>
          </div>
          <h5 class="fw-bold">Cetak Dokumen</h5>
          <p class="text-muted">
            Kami menyediakan layanan cetak dokumen dengan kualitas terbaik untuk berbagai kebutuhan Anda, baik dokumen
            resmi, tugas, atau materi pekerjaan.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-card-text"></i>
          </div>
          <h5 class="fw-bold">Cetak Kartu Nama</h5>
          <p class="text-muted">
            Tinggalkan kesan pertama yang tak terlupakan dengan kartu nama profesional kami. Desain menarik, kualitas
            tinggi, dan berbagai pilihan bahan.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-image"></i>
          </div>
          <h5 class="fw-bold">Cetak Foto</h5>
          <p class="text-muted">
            Cetak foto dengan kualitas tinggi yang tahan lama. Pilihan ukuran lengkap untuk keperluan dokumentasi,
            kenangan, atau hadiah istimewa.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-sticky"></i>
          </div>
          <h5 class="fw-bold">Cetak Stiker</h5>
          <p class="text-muted">
            Buat stiker yang menarik untuk keperluan promosi, dekorasi, atau personalisasi. Pilihan bahan dan ukuran
            yang sesuai kebutuhan.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-envelope-open"></i>
          </div>
          <h5 class="fw-bold">Cetak Undangan</h5>
          <p class="text-muted">
            Cetak undangan untuk berbagai acara dengan desain elegan dan pilihan bahan berkualitas. Sesuaikan dengan
            tema acara Anda.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="600">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-file-earmark-lock"></i>
          </div>
          <h5 class="fw-bold">Laminating</h5>
          <p class="text-muted">
            Lindungi dokumen penting Anda dari kerusakan dengan layanan laminating berkualitas. Tersedia dalam
            berbagai ukuran.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="700">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-journal-text"></i>
          </div>
          <h5 class="fw-bold">Makalah</h5>
          <p class="text-muted">
            Dukung penyusunan makalah Anda dengan layanan cetak kami. Pilihan format dan finishing yang sesuai dengan
            kebutuhan akademik.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="800">
        <div class="service-item p-4 border rounded">
          <div class="icon mb-3">
            <i class="bi bi-controller"></i>
          </div>
          <h5 class="fw-bold">Top Up Game</h5>
          <p class="text-muted">
            Nikmati pengalaman gaming tanpa batas dengan layanan top-up game kami. Proses cepat dan harga kompetitif.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section id="product" class="product section">
    <div class="container section-title">
      <p id="barang" class="barang pt-5">PRODUCT</p>
      <h3>PRODUK KAMI</h3>
    </div>

    <div class="slider-container pb-5">
      <div class="slider">
        <div class="slide">
          <img src="img/p1.jpg" alt="Product 1" />
          <p class="description">Produk 1</p>
          <p class="product-details">Produk berkualitas tinggi dengan bahan terbaik dan terjamin.</p>
          <p class="hp">Rp25.000</p>
        </div>

        <div class="slide">
          <img src="img/p2.jpg" alt="Product 2" />
          <p class="description">Produk 2</p>
          <p class="product-details">Produk unggulan dengan kualitas premium dan desain modern.</p>
          <p class="hp">Rp10.000</p>
        </div>

        <div class="slide">
          <img src="img/p3.jpg" alt="Product 3" />
          <p class="description">Produk 3</p>
          <p class="product-details">Desain elegan dengan bahan berkualitas tinggi.</p>
          <p class="hp">Rp12.000</p>
        </div>

        <div class="slide">
          <img src="img/p4.jpg" alt="Product 4" />
          <p class="description">Produk 4</p>
          <p class="product-details">Produk unggulan dengan kualitas premium dan desain modern.</p>
          <p class="hp">Rp112.000</p>
        </div>

        <div class="slide">
          <img src="img/p5.jpg" alt="Product 5" />
          <p class="description">Produk 5</p>
          <p class="product-details">Produk dengan kualitas dan daya tahan terbaik di kelasnya.</p>
          <p class="hp">Rp25.000</p>
        </div>

        <div class="slide">
          <img src="img/p6.jpg" alt="Product 6" />
          <p class="description">Produk 6</p>
          <p class="product-details">Dirancang untuk memenuhi standar tertinggi untuk penggunanya</p>
          <p class="hp">Rp15.000</p>
        </div>

        <div class="slide">
          <img src="img/p7.jpg" alt="Product 7" />
          <p class="description">Produk 7</p>
          <p class="product-details">Terbuat dari bahan berkualitas tinggi, dengan desain yang elegan dan penuh warna.
          </p>
          <p class="hp">Rp8.000</p>
        </div>

        <div class="slide">
          <img src="img/p8.jpg" alt="Product 8" />
          <p class="description">Produk 8</p>
          <p class="product-details">Berkualitas tinggi yang menawarkan kecepatan performa yang sangat cepat.</p>
          <p class="hp">Rp120.000</p>
        </div>
      </div>

      <span class="arrow left">&#10094;</span>
      <span class="arrow right">&#10095;</span>

      <div class="dots-container">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </section>

  <section id="price" class="price section">
  <div class="container section-title" data-aos="fade-up">
    <p id="harga" class="harga pt-5">PRICE</p>
    <h3>DAFTAR HARGA</h3>
  </div>

  <div class="container pb-5">
    <div class="row g-4">
      <!-- Item 1: Cetak Dokumen -->
      <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="100">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cetak Dokumen</h5>
            <h6>Rp1.000/lembar</h6>
            <img src="img/1.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>

      <!-- Item 2: Cetak Foto -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cetak Foto</h5>
            <h6>Rp5.000/lembar</h6>
            <img src="img/2.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>

      <!-- Item 3: Cetak Stiker -->
      <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cetak Stiker</h5>
            <h6>Rp25.000/lembar</h6>
            <img src="img/3.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>

      <!-- Item 4: Cetak Undangan -->
      <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="400">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Cetak Undangan</h5>
            <h6>Rp2.000/lembar</h6>
            <img src="img/4.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>

      <!-- Item 5: Laminating -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Laminating</h5>
            <h6>Rp3.000/lembar</h6>
            <img src="img/5.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>

      <!-- Item 6: Top Up Game -->
      <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-delay="600">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Top Up Game</h5>
            <h6>Mulai dari Rp 10.000</h6>
            <img src="img/6.jpg" alt="Cetak Dokumen" class="card-img">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <p id="info" class="info pt-5">CONTACT</p>
    <h3>HUBUNGI KAMI</h3>
  </div>

  <div class="container">
    <div class="row gy-4">
      <!-- Alamat -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-geo-alt"></i>
          <h3>Alamat</h3>
          <p>Jl.Dirgahayu No.106</p>
        </div>
      </div>

      <!-- Phone -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-telephone"></i>
          <h3>Phone</h3>
          <p>+62 877-2463-6300</p>
        </div>
      </div>

      <!-- Email -->
      <div class="col-lg-3 col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p>abtprint01@gmail.com</p>
        </div>
      </div>

      <!-- Map -->
      <div class="container map-container pb-5" data-aos="zoom-in" data-aos-delay="400">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.762731819664!2d113.46907759999999!3d-7.153409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd77e047bfbe6f1%3A0x8c645bbe83acf497!2sJl.%20Dirgahayu%20No.106%2C%20Atoran%2C%20Bugih%2C%20Kec.%20Pamekasan%2C%20Kabupaten%20Pamekasan%2C%20Jawa%20Timur%2069317!5e0!3m2!1sid!2sid!4v1732795677505!5m2!1sid!2sid"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<footer class="text-dark text-center text-lg-start">
  <div class="container p-4">
    <div class="row mt-4">
      <!-- WR2 PRINT Info -->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="100">
        <h5 class="text-uppercase mb-4">WR2 PRINT</h5>
        <p>
          WR2 PRINT adalah solusi percetakan modern yang menyediakan berbagai layanan cetak berkualitas tinggi,
          mulai dari kartu nama hingga spanduk besar, dengan harga yang kompetitif dan hasil yang memuaskan.
        </p>
      </div>

      <!-- Call Us Section -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
        <h5 class="text-uppercase mb-4 pb-1">Call Us</h5>
        <ul class="fa-ul" style="margin-left: 1.65em;">
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jl.Dirgahayu No.106</span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">abtprint01@gmail.com</span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+62 877-2463-6300</span>
          </li>
        </ul>
      </div>

      <!-- Opening Hours -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0" data-aos="fade-left" data-aos-delay="300">
        <h5 class="text-uppercase mb-4">Opening Hours</h5>
        <table class="table text-center text-dark">
          <tbody class="fw-normal">
            <tr>
              <td>Senin - Kamis:</td>
              <td>09.00 - 21.00</td>
            </tr>
            <tr>
              <td>Jumat - Sabtu:</td>
              <td>01.00 - 21.00</td>
            </tr>
            <tr>
              <td>Minggu:</td>
              <td>Tutup</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Copyright Section -->
 <div class="text-center p-3" style="background-color:silver;">
      © 2024 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">WR2 PRINT</a>
    </div>
</footer>


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="bootstrap/bootstrap533/js/bootstrap.bundle.min.js"></script>

  <script>
    AOS.init({
      once: true,
      offset: 120,
      duration: 1000,
      easing: 'ease',
    });
  </script>

  


  <script>
    document.addEventListener("scroll", function () {
      const navbar = document.querySelector(".navbar");
      if (window.scrollY > 50) {
        navbar.classList.remove("navbar-transparent");
        navbar.classList.add("navbar-solid");
      } else {
        navbar.classList.remove("navbar-solid");
        navbar.classList.add("navbar-transparent");
      }
    });
  </script>

  <script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const slider = document.querySelector('.slider');

    const updateSlider = () => {
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;

      dots.forEach((dot, index) => {
        dot.classList.remove('active');
        if (index === currentIndex) {
          dot.classList.add('active');
        }
      });
    };

    document.querySelector('.arrow.left').addEventListener('click', () => {
      currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
      updateSlider();
    });

    document.querySelector('.arrow.right').addEventListener('click', () => {
      currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
      updateSlider();
    });

    updateSlider();
  </script>

</body>

</html>