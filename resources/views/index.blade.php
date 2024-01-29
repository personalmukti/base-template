<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <section class="header">
        <nav class="navbar">
            <div class="navbar-brand">
                <img src="logo.png" alt="Logo" class="navbar-logo">
                <span class="navbar-app-name">Nama Aplikasi</span>
            </div>
            <ul class="navbar-menu">
                <li class="nav-item"><a href="#" class="nav-link">Menu 1</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Menu 2</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Menu 3</a></li>
            </ul>
            <button class="btn-login">Login</button>
        </nav>
    </section>
</body>
</html>
