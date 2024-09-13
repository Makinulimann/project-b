<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Materi</h1>
    <form action="{{ route('updateMateri', $materi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $materi->judul }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="isi_materi">Isi Materi</label>
            <textarea name="isi_materi" class="form-control" rows="5" required>{{ $materi->isi_materi }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="kelas_id">Id Kelas</label>
            <select name="kelas_id" class="form-control" required>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $materi->kelas_id == $kelasItem->id ? 'selected' : '' }}>{{ $kelasItem->id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
