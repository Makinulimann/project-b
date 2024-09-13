<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6 text-start">
                <h1>Daftar Kelas</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admindashboard') }}" class="btn btn-primary mb-3">dashboard</a>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('buatKelas') }}" class="btn btn-primary mb-3">tambah Kelas</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $k)
                <tr>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ Str::limit($k->deskripsi, 20) }}</td>
                    <td>
                        @if($k->gambar)
                            <img src="/storage/photos/{{ $k->gambar }}" alt="{{ $k->nama_kelas }}" width="50">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('editKelas', $k->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('destroyKelas', $k->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
