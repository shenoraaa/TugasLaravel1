<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Harry Potter', 'penulis' => 'J.K Rowling', 'tahun' => 2005, 'harga' => 'Rp 75.000', 'gambar' => 'laskar.jpg'],
            ['judul' => 'Planet Luna', 'penulis' => 'Ray Yasine', 'tahun' => 1980, 'harga' => 'Rp 90.000', 'gambar' => 'bumi.jpg'],
            ['judul' => 'The Last Spell Breather', 'penulis' => 'Julie Pekie', 'tahun' => 2014, 'harga' => 'Rp 60.000', 'gambar' => 'dilan.jpg'],
            ['judul' => 'Filosofi Kopi', 'penulis' => 'Dewi Lestari', 'tahun' => 2006, 'harga' => 'Rp 55.000', 'gambar' => 'filosofi.jpg'],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009, 'harga' => 'Rp 70.000', 'gambar' => 'menara.jpg'],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2004, 'harga' => 'Rp 68.000', 'gambar' => 'ayat.jpg'],
            ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015, 'harga' => 'Rp 80.000', 'gambar' => 'pulang.jpg'],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016, 'harga' => 'Rp 82.000', 'gambar' => 'hujan.jpg'],
            ['judul' => 'Koala Kumal', 'penulis' => 'Raditya Dika', 'tahun' => 2015, 'harga' => 'Rp 58.000', 'gambar' => 'koala.jpg'],
            ['judul' => 'Ronggeng Dukuh Paruk', 'penulis' => 'Ahmad Tohari', 'tahun' => 1982, 'harga' => 'Rp 65.000', 'gambar' => 'ronggeng.jpg'],
        ];

        $search = $request->input('search');

        if ($search) {
            $books = array_filter($books, function ($book) use ($search) {
                return stripos($book['judul'], $search) !== false ||
                       stripos($book['penulis'], $search) !== false;
            });
        }

        return view('home', [
            'books' => $books,
            'search' => $search
        ]);
    }
}
