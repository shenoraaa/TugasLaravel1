<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $peminjaman = Peminjaman::when($search, function ($query, $search) {
            return $query->where('nama_peminjam', 'like', "%{$search}%")
                         ->orWhere('judul_buku', 'like', "%{$search}%");
        })->get();

        return view('peminjaman', compact('peminjaman', 'search'));
    }

    public function create()
    {
        return view('peminjaman_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'status' => 'Dipinjam',
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('edit_peminjaman', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'status' => 'Dipinjam',
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil dihapus!');
    }
}
