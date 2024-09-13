<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Materi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6 text-start">
                <h1>Daftar Materi</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admindashboard') }}" class="btn btn-primary mb-3">dashboard</a>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('buatMateri') }}" class="btn btn-primary mb-3">tambah materi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>isi_materi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materi as $m)
                <tr>
                    <td>{{ $m->judul }}</td>
                    <td>{{ Str::limit($m->isi_materi, 50) }}</td>
                    <td>
                        <a href="{{ route('editMateri', $m->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('destroyMateri', $m->id) }}" method="POST" style="display:inline-block;">
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
