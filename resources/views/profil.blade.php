<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark w-100">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="assets/img/logo small.png" alt="" width="30" class="d-inline-block align-text-top me-2">
                    Sinau Ngoding
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('dashboard') }}">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">KELAS</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">BEASISWA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">EVENT</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <img src="/storage/photos/{{ $user->photo }}" alt="Profile Photo" class="photo photo-small">
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('profil') }}">Hi, {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn button-primary me-2" href="{{ route('logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container pt-5">
            <div class="card-auth ">
                <div class="card-body">
                    <h2 class="card-title">Profil</h2>
                    <img src="/storage/photos/{{ $user->photo }}" alt="Profile Photo" class="profile-photo">
                    <h3>Nama</h3>
                    <h4>{{ $user->name }}</h4>
                    <h3>Username</h3>
                    <h4>{{ $user->username }}</h4>
                    <h3>Email</h3>
                    <h4>{{ $user->email }}</h4>
                    <h3>Nomor HP</h3>
                    <h4>{{ $user->phone }}</h4>
                    <a href="#" class="btn button-primary mt-4" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profil.edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto Profil</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            @if ($user->photo)
                            <img src="/storage/photos/{{ $user->photo }}" alt="Profile Photo" class="mt-2" width="100">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Hp</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <img src="assets/img/logo_small.png" alt="">
                        <a href="#" class="ms-3">Sinau Ngoding</a>
                    </div>
                    <div class="col-md-4 d-flex justify-content-evenly">
                        <a href="#">Beranda</a>
                        <a href="#">Kelas</a>
                        <a href="#">Beasiswa</a>
                        <a href="#">Event</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright bg Kelas Pemweb SI-C All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlB43g9gYdIhknbRN/O28sDpegei3paNdF+qxHmn6V/Ae4p4p6ROYuostC" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiY2fPhL2LR7a4UmdT4xFCARaO3sLTGi4tk69It5LRP5L9AKT9FMEhR2" crossorigin="anonymous"></script>

</body>

</html>