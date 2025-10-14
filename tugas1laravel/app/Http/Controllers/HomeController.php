<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Harry Potter', 'penulis' => 'J.K Rowling', 'tahun' => 2005],
            ['judul' => 'Planet Luna', 'penulis' => 'Ray Yasine', 'tahun' => 1980],
            ['judul' => 'The Last Spell Breather', 'penulis' => 'Julie Pekie', 'tahun' => 2014],
            ['judul' => 'Filosofi Kopi', 'penulis' => 'Dewi Lestari', 'tahun' => 2006],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2004],
            ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
            ['judul' => 'Koala Kumal', 'penulis' => 'Raditya Dika', 'tahun' => 2015],
            ['judul' => 'Ronggeng Dukuh Paruk', 'penulis' => 'Ahmad Tohari', 'tahun' => 1982],
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
public function showForm()
{
    return view('form');
}

public function kirimPesan(Request $request)
{
    $nama = $request->input('nama') ?: 'Anonim';
    $pesan = $request->input('pesan');

    $messages = session('messages', []);
    $messages[] = ['nama' => $nama, 'pesan' => $pesan];
    session(['messages' => $messages]);

    return redirect('/')->with('success', 'Pesan yang dikirim ada di bawah!');
}

}
