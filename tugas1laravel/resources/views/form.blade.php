<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body class="form-body">

<div class="form-container">
    <h2>Pesan untuk Gridas Library</h2>
    <p class="subtitle">Kami senang mendengar masukan dan pesan dari kalian</p>

    <form action="{{ route('pesan.kirim') }}" method="POST">
        @csrf
        <div class="input-group">

            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda (opsional)">
        </div>
<br>
        <div class="input-group">
            <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
        </div>
<br>
        <button type="submit" class="btn-submit">Kirim Pesan</button>
    </form>
</div>

</body>
</html>
