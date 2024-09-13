<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
<div class="row">
            <div class="col-md-6 text-start">
                <h1>Buat Akun</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admindashboard') }}" class="btn btn-primary mb-3">dashboard</a>
            </div>
        </div>
    <form action="{{ route('storeAkun') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone">Nomor Hp</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Buat</button>
    </form>
</div>
</body>
</html>
