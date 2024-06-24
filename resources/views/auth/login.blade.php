<!doctype html>
<html lang="en" data-bs-theme="auto">
<head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Dinas Sosial Sukabumi | {{ $title }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
        @endif
        <form action="/login" method="post">
        @csrf
        <center>
        <img class="mb-4" src="images/logo.png" alt="" width="80" height="80">
        </center>
        <h1 class="h3 mb-3 fw-normal">Dinas Sosial Sukabumi</h1>
        <div class="form-floating">
            <input type="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="name@example.com" autofocus required value="{{ old('nim') }}">
            <label for="nim">NIP</label>
            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>
