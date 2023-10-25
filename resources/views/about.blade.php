<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel first steps</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
            <div class="container-fluid">

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="/contacts">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="vh-100">
        <h1>
            {{$message}}
        </h1>
    </main>
    <footer id="app_footer" class="bg-dark text-white pt-5">
        <div id="footer_top" class="container d-flex justify-content-around">

            <ul class="list-unstyled"><span>
                    <h5 class="text-white">About us</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
            <ul class="list-unstyled"><span>
                    <h5 class="text-white">Contatti</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
            <ul class="list-unstyled"><span>
                    <h5 class="text-white">Lavora con noi</h5>
                </span>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
                <li><a href="#" class="text-decoration-none text-white">Quick Link</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>