<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 text-start">
                <h1>Daftar Akun</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admindashboard') }}" class="btn btn-primary mb-3">dashboard</a>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('admin.setting.buatAkun') }}" class="btn btn-primary mb-3">Tambah Akun</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <a href="{{ route('admin.setting.editAkun', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('destroyAkun', $user->id) }}" method="POST" style="display:inline-block;">
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