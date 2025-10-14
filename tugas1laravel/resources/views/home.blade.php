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

            <div class="pesan-btn-container">
                <a href="{{ route('form.pesan') }}" class="pesan-btn">
                    💬 Kirim Pesan Khusus untuk Gridas Library
                </a>
                <a href="{{ url('peminjaman') }}" class="pinjam-btn-top">📚 Pinjam Buku</a>
            </div>
        </header>

        @if(session('success'))
            <div style="background-color:#e1f5e1; color:#2a652a; padding:10px; border-radius:10px; margin:15px 0; text-align:center;">
                {{ session('success') }}
            </div>
        @endif

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
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $i => $book)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $book['judul'] }}</td>
                            <td>{{ $book['penulis'] }}</td>
                            <td>{{ $book['tahun'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak ada hasil ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </main>

        @if(session('messages'))
            <div class="pesan-container">
                <h3>Pesan dari Pengunjung</h3>
                @foreach(session('messages') as $msg)
                    <div class="pesan-box">
                        <strong>{{ $msg['nama'] }}</strong>:
                        <p>{{ $msg['pesan'] }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <footer>
            <div class="copyright">
                &copy; {{ date('Y') }} Gridas Library. All rights reserved.
            </div>
        </footer>
    </div>

    <style>
        .pinjam-btn-top {
            background-color: #1b2a49;
            color: #fff;
            padding: 8px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }
        .pinjam-btn-top:hover {
            background-color: #2d4679;
        }
        .pesan-btn-container {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</body>
</html>
