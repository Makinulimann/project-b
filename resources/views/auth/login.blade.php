<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- style -->
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

        <div class="container">
            <div class="row justify-content-center">
                <div class="card-auth mt-4">
                    <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center">Login</h2>
                        @if ($errors->has('loginError'))
                        <div class="alert alert-danger">
                            {{ $errors->first('loginError') }}
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h5>Username</h5>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <h5>Password</h5>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group d-flex justify-content-center mt-3">
                                <input class="btn button-primary" type="submit" value="Masuk">
                            </div>
                            <div class="form-group d-flex justify-content-center mt-2">
                                <a class="btn button-secondary" href="{{ route('showRegister') }}">Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</section>

</html>