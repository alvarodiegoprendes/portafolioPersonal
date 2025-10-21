<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Portafolio de Álvaro Diego Prendes - Programador Full Stack especializado en Python, C++, Laravel y desarrollo web')">
    <meta name="keywords" content="programador, desarrollador, Python, C++, Laravel, PHP, desarrollo web, freelance">
    <meta name="author" content="Álvaro Diego Prendes">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Álvaro Diego Prendes - Programador Full Stack')">
    <meta property="og:description" content="@yield('meta_description', 'Portafolio profesional de desarrollo web y software')">

    <title>@yield('title', 'Álvaro Diego Prendes - Programador Full Stack')</title>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('extra_css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fas fa-code me-2"></i>Álvaro Prendes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            <i class="fas fa-user me-1"></i>Sobre Mí
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            <i class="fas fa-laptop-code me-1"></i>Proyectos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">
                            <i class="fas fa-cogs me-1"></i>Habilidades
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <i class="fas fa-envelope me-1"></i>Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; {{ date('Y') }} Álvaro Diego Prendes. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="https://github.com/alvarodiegoprendes" target="_blank" class="text-white me-3">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/alvaro-diego-6448032bb/" target="_blank" class="text-white me-3">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="mailto:alvarodiegoprendes@gmail.com" class="text-white me-3">
                        <i class="fas fa-envelope fa-2x"></i>
                    </a>
                    <a href="https://wa.me/34692852139" target="_blank" class="text-white me-3">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    @yield('extra_js')
</body>
</html>
