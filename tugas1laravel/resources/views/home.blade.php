<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gridas Library</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="
    background: url('{{ asset('images/bgblur.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    color: #1b2a49;
">

    <div class="container">
        <header class="header-top">
            <h2 class="library-title">Gridas Library</h2>
            <p class="slogan">Akses Tak Terbatas, Wawasan Tanpa Batas.</p>
        </header>

        <main>
            <div class="table-header">
                <h3>Daftar Buku Best Seller</h3>
                <form method="GET" action="{{ url('/') }}" class="search-box">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Cari buku atau penulis...">
                    <button type="submit">Cari</button>
                </form>
            </div>
<br>

            <div class="image-carousel-container">
  <div class="carousel-track">
    <div class="image-card">
      <img src="{{ asset('images/buku_harrypotter.jpg') }}" alt="Buku 1">
      <div class="book-title">Harry Potter</div>
    </div>
    <div class="image-card">
      <img src="{{ asset('images/bukuLuna.jpg') }}" alt="Buku 2">
      <div class="book-title">Planet Luna</div>
    </div>
    <div class="image-card">
      <img src="{{ asset('images/Bukubaru.jpg') }}" alt="Buku 3">
      <div class="book-title">The Last Spell</div>
    </div>
  </div>
</div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $i => $book)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $book['judul'] }}</td>
                            <td>{{ $book['penulis'] }}</td>
                            <td>{{ $book['tahun'] }}</td>
                            <td>{{ $book['harga'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Tidak ada hasil ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </main>

       <footer>
            <div class="copyright">
                &copy; {{ date('Y') }} Gridas Library. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
