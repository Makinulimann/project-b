<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Materi</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Buat Materi</h1>
    <form action="{{ route('storeMateri') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="isi_materi">Isi Materi</label>
            <textarea name="isi_materi" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="kelas_id">Id Kelas</label>
            <input type="text" name="kelas_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
</body>
</html>
