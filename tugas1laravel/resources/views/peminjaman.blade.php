<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body style="
    background: url('{{ asset('images/bgblur.jpg') }}') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    color: #1b2a49;
" class="min-h-screen px-6 py-10 bg-opacity-90">

    <div class="bg-white/80 backdrop-blur-md shadow-xl rounded-2xl p-8 max-w-6xl mx-auto border border-[#dce3f3]">
        <header class="mb-8 text-center">
            <h1 class="text-4xl font-semibold text-[#1b2a49] mb-2 tracking-wide">📚 Data Peminjaman Buku</h1>
            <p class="text-sm text-gray-600 italic">Kelola data peminjaman dengan mudah dan rapi</p>
        </header>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 border border-green-300 rounded-lg p-3 mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <a href="{{ route('peminjaman.create') }}"
               class="bg-[#1b2a49] hover:bg-[#243b6b] text-white px-5 py-2 rounded-lg shadow-md transition-all duration-300 ease-in-out transform hover:scale-105">
                + Tambah Peminjaman
            </a>

            <form action="{{ route('peminjaman.index') }}" method="GET" class="w-full md:w-1/3">
                <div class="flex items-center bg-white border border-gray-300 rounded-full shadow-sm overflow-hidden">
                    <input type="text" name="search" value="{{ request('search') }}"
                           placeholder="Cari nama peminjam atau judul buku..."
                           class="w-full px-4 py-2 text-sm focus:outline-none">
                    <button type="submit"
                            class="bg-[#1b2a49] hover:bg-[#243b6b] text-white px-4 py-2 text-sm rounded-r-full transition">
                        🔍
                    </button>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-center border-collapse">
                <thead class="bg-[#1b2a49] text-white">
                    <tr>
                        <th class="py-3 px-2">No</th>
                        <th class="py-3 px-2">Nama Peminjam</th>
                        <th class="py-3 px-2">Judul Buku</th>
                        <th class="py-3 px-2">Tanggal Pinjam</th>
                        <th class="py-3 px-2">Status</th>
                        <th class="py-3 px-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white/60 backdrop-blur-md">
                    @forelse($peminjaman as $item)
                        <tr class="hover:bg-[#eaf0fa] transition-all duration-200">
                            <td class="border-t border-gray-300 py-2">{{ $loop->iteration }}</td>
                            <td class="border-t border-gray-300 py-2 font-medium">{{ $item->nama_peminjam }}</td>
                            <td class="border-t border-gray-300 py-2">{{ $item->judul_buku }}</td>
                            <td class="border-t border-gray-300 py-2">{{ $item->tanggal_pinjam }}</td>
                            <td class="border-t border-gray-300 py-2 text-blue-700 font-semibold">{{ $item->status }}</td>
                            <td class="border-t border-gray-300 py-2 space-x-2">
                                <a href="{{ route('peminjaman.edit', $item->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md shadow transition-all duration-200">
                                    Edit
                                </a>
                                <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md shadow transition-all duration-200"
                                            onclick="return confirm('Yakin ingin menghapus?')">
                                         Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 text-gray-500 italic">Belum ada data peminjaman</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <footer class="mt-10 text-center text-gray-600 text-sm">
            &copy; {{ date('Y') }} <span class="font-semibold text-[#1b2a49]">Gridas Library</span>. All rights reserved.
        </footer>
    </div>

</body>
</html>
