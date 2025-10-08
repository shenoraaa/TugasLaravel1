<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/form-pesan', [HomeController::class, 'showForm'])->name('form.pesan');
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('pesan.kirim');
