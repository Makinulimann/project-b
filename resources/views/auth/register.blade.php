<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="auth">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark w-100">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="assets/img/logo small.png" alt="Logo" width="30" class="d-inline-block align-text-top me-2">
                Sinau Ngoding
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn button-primary me-2" href="{{ route('showRegister') }}">DAFTAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn button-secondary" href="{{ route('showLogin') }}">MASUK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card-auth">
                <div class="card-body">
                    <h2 class="card-title text-center">Daftar</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <p>Nama</p>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <p>Username</p>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <p>Email</p>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <p>Password</p>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <p>Nomor Hp</p>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor Hp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center mt-3">
                            <input class="btn button-primary" type="submit" value="Daftar">
                        </div>
                        <div class="form-group d-flex justify-content-center mt-2">
                            <a class="btn button-secondary" href="{{ route('showLogin') }}">Login</a>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFZg5fSNwIbjQpeKfHIDKp3I4dI3B9A1Ff5rIB7FQQVFIhueVZmo2j0F6B" crossorigin="anonymous"></script>
</body>
</html>
