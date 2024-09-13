<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Dashboard</title>
</head>

<body>

    <section id="dashboard">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
            <div class="container">
                <a class="navbar-brand" href="#">
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
    </section>
    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>#WaktunyaTambahSkill di Sinau Ngoding</h1>
                    <p><span class="fw-bold">Sinau Ngoding</span> percaya bahwa semangat untuk terus belajar adalah kunci menciptakan dampak positif dalam hidup kita. Bersama Sinau Ngoding, mulailah perjalanan kamu hari ini!</p>

                    <button class="button-lg-primary">Pilih Kelas</button>
                    <a href="#">
                        <img src="assets/img/button arrow.png" alt="">
                    </a>
                </div>
            </div>

            <img src="assets/img/hero image.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
        </div>
    </section>

    <!-- Pilihan Section -->
    <section id="pilihan" class="mt-5">
        <div class="container">
            <div class="row text-center mb-4">
                <h2>Kelas Tersedia</h2>
            </div>
            <div class="row">
                @foreach($kelas as $k)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="/storage/photos/{{ $k->gambar }}" class="card-img-top" alt="{{ $k->nama_kelas }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $k->nama_kelas }}</h5>
                            <p class="card-text">{{ $k->deskripsi }}</p>
                            <a class="btn button-primary me-2" href="{{ route('kelas', $k->id) }}">Kelas</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Value Section -->
    <section id="value">
        <div class="container-fluid value-container mt-5 mb-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h1 class="value-h1">Kenapa Sinau Ngoding?</h1>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <div class="card-value md-4">
                        <div class="text-content">
                            <h3>Kurikulum Berdasarkan Kebutuhan Industri</h3>
                            <p>Hemat waktu dan biaya! Kurikulum Sinau Ngoding dibuat agar lebih mudah dimengerti dan sesuai dengan kebutuhan industri. Hampir 50% peserta berasal dari background non-IT dan 90% lulusan berhasil mendapatkan pekerjaan setelahnya.</p>
                            <button class="button-lg-secondary">Mulai Perjalanan</button>
                        </div>
                        <img src="assets/img/value image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <img src="assets/img/logo small.png" alt="">
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
                        <p>Copyright bg Kelas Pemweb SI-C All Right Reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>