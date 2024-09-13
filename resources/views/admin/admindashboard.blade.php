<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <section id="profil">
        <nav class="navbar navbar-expand-lg navbar-dark w-100">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admindashboard') }}">
                    <img src="assets/img/logo small.png" alt="" width="30" class="d-inline-block align-text-top me-2">
                    Sinau Ngoding
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-2">
                            <img src="/storage/photos/{{ $user->photo }}" alt="Profile Photo" class="photo photo-small">
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('profil') }}">Hi, {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-primary me-2" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <h1 class="mb-4">Admin Dashboard</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Daftar Akun</td>
                        <td>
                            <a href="{{ route('admin.settings.akun') }}" class="btn btn-primary">Settings</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Daftar Kelas</td>
                        <td>
                            <a href="{{ route('kelas') }}" class="btn btn-primary">Settings</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Daftar Materi</td>
                        <td>
                            <a href="{{route('materi')}}" class="btn btn-primary">Settings</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>