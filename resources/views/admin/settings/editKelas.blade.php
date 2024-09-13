<!-- editArticle.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Kelas</h1>
    <form action="{{ route('updateKelas', $kelas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required>{{ $kelas->deskripsi }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control">
            @if($kelas->gambar)
                <img src="/storage/photos/{{ $kelas->gambar }}" alt="{{ $kelas->nama_kelas }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
