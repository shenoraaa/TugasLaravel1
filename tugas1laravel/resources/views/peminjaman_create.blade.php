<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body style="
    background: url('{{ asset('images/bgblur.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    color: #1b2a49;
" class="min-h-screen flex items-center justify-center px-4 py-10">

    <div class="bg-white/80 backdrop-blur-md shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-[#dce3f3]">
        <h1 class="text-3xl font-semibold text-center mb-6 text-[#1b2a49] tracking-wide">
            Tambah Data Peminjaman
        </h1>

        <form action="{{ route('peminjaman.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-[#1b2a49] font-medium mb-1">Nama Peminjam</label>
                <input type="text" name="nama_peminjam"
                       class="border border-gray-300 rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#1b2a49] transition-all"
                       placeholder="Masukkan nama peminjam" required>
            </div>

            <div>
                <label class="block text-[#1b2a49] font-medium mb-1">Judul Buku</label>
                <input type="text" name="judul_buku"
                       class="border border-gray-300 rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#1b2a49] transition-all"
                       placeholder="Masukkan judul buku" required>
            </div>

            <div>
                <label class="block text-[#1b2a49] font-medium mb-1">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam"
                       class="border border-gray-300 rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#1b2a49] transition-all" required>
            </div>

            <div class="flex items-center justify-between pt-4">
                <button type="submit"
                        class="bg-[#1b2a49] hover:bg-[#243b6b] text-white px-6 py-2 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                    Simpan
                </button>

                <a href="{{ route('peminjaman.index') }}"
                   class="text-[#1b2a49] font-medium hover:underline hover:text-[#2f458a] transition-all">
                 Kembali
                </a>
            </div>
        </form>
    </div>

</body>
</html>
