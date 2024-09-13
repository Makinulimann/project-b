<!doctype html>
<html lang="en">

<head>
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

    <title>Sinau Ngoding</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo small.png" alt="" width="30" class="d-inline-block align-text-top me-2">
                Sinau Ngoding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
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
                <div class="button text-end">
                    <a class="btn button-primary me-2" href="{{ route('showRegister') }}">DAFTAR</a>
                    <a class="btn button-secondary" href="{{ route('showLogin') }}">MASUK</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Mulai Perjalananmu
                        di Sinau Ngoding</h1>
                    <p><span class="fw-bold">Sinau Ngoding</span> percaya bahwa semangat untuk terus belajar adalah kunci menciptakan dampak positif dalam hidup kita. Bersama Sinau Ngoding, mulailah perjalanan kamu hari ini!</p>

                    <button class="button-lg-primary">Mulai Perjalanan</button>
                    <a href="#">
                        <img src="assets/img/button arrow.png" alt="">
                    </a>
                </div>
            </div>

            <img src="assets/img/hero image.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
        </div>
    </section>


    <!-- Layanan Section -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Tingkatkan skillmu bersama Sinau Ngoding</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/kelas-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Kelas</h3>
                        <p class="mt-3">Berbagai kelas untuk belajar ngoding mulai dari dasar hingga lanjut untuk mengasah skillmu</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/beasiswa-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Beasiswa</h3>
                        <p class="mt-3">Temukan beasiswa yang tepat untukmu di Sinau Ngoding</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/event-icon.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Event</h3>
                        <p class="mt-3">Ikuti berbagai event menarik di Sinau Ngoding dan dapatkan benefitnya</p>
                    </div>
                </div>

            </div>
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
                    <a href="{{ route('kelas', $k->id) }}">
                        <div class="card h-100">
                            <img src="/storage/photos/{{ $k->gambar }}" class="card-img-top" alt="{{ $k->nama_kelas }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $k->nama_kelas }}</h5>
                                <p class="card-text">{{ $k->deskripsi }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Value Section -->
    <section id="value">
        <div class="container-fluid value-container mt-5 mb-5">
            <div class="container ">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h1 class="value-h1">Kenapa Sinau Ngoding ?</h1>
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




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
</body>

</html>