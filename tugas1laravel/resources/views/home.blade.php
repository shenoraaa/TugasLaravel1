<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gridas Library</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
</head>
<body>
  <br>

  <!-- HANYA TAMPILAN SAJA YA KA,BLM BISA DIAPA APAIN HEEHEHE -->
  <header class="navbar">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
      <span>Gridas Library</span>
    </div>
    <ul class="nav-links">
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Daftar Buku</a></li>
      <li><a href="#">Peminjaman</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
    <a href="#" class="btn-dark">LOGIN</a>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>
        <span style="font-family: 'Dancing Script', cursive; font-size: 55px; color:#1f2a44;">Welcome To</span><br>
        <span style="font-family: 'Poppins', sans-serif; color:#3b6ddc;">Gridas Library</span>
      </h1>
      <p>Gridas Library SMKN 2 Sumedang adalah perpustakaan digital sekolah yang memudahkan siswa dan guru dalam mencari serta membaca berbagai koleksi buku secara online. Tujuannya untuk mendukung literasi, pembelajaran, dan penerapan teknologi di lingkungan sekolah.</p>
      <a href="#" class="btn-primary">Lihat Selengkapnya..</a>
    </div>

    <div class="hero-images">
      <div class="img-main">
        <img src="{{ asset('images/2.jpg') }}" alt="Main Library">
      </div>
      <div class="img-side">
        <img src="{{ asset('images/resepsionis.jpg') }}" alt="Library Hall">
        <img src="{{ asset('images/blajat.jpg') }}" alt="Book Shelf">
      </div>
    </div>
  </section>
</body>
</html>
