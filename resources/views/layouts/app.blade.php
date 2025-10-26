<!DOCTYPE html>
<html lang="es">
<head>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V0M3N5J45L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-V0M3N5J45L');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Portafolio de Álvaro Diego Prendes - Programador Full Stack especializado en Python, C++, Laravel y desarrollo web')">
    <meta name="keywords" content="programador valencia, desarrollador full stack españa, Python developer, Laravel developer, Django developer, desarrollo web valencia, freelance programador, portafolio web, álvaro diego prendes, C++ developer, PHP developer, desarrollo aplicaciones web, programador freelance valencia, desarrollo software a medida">
    <meta name="author" content="Álvaro Diego Prendes">
    <meta name="robots" content="index, follow">
    <meta name="language" content="es">

    <meta name="revisit-after" content="7 days">
    <meta name="geo.region" content="ES-VC">
    <meta name="geo.placename" content="Valencia, España">
    <meta name="geo.position" content="39.4699;-0.3763">
    <meta name="ICBM" content="39.4699, -0.3763">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Álvaro Diego Prendes - Programador Full Stack')">
    <meta property="og:description" content="@yield('meta_description', 'Portafolio profesional de desarrollo web y software')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Álvaro Diego Prendes - Portafolio">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="{{ asset('images/foto_perfil.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Álvaro Diego Prendes - Desarrollador Full Stack">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Álvaro Diego Prendes - Programador Full Stack')">
    <meta name="twitter:description" content="@yield('meta_description', 'Portafolio profesional de desarrollo web y software')">
    <meta name="twitter:image" content="{{ asset('images/foto_perfil.jpg') }}">
    <meta name="twitter:image:alt" content="Álvaro Diego Prendes - Desarrollador Full Stack">

    <title>@yield('title', 'Álvaro Diego Prendes - Programador Full Stack')</title>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "Person",
          "@@id": "{{ url('/') }}#person",
          "name": "Álvaro Diego Prendes",
          "url": "{{ url('/') }}",
          "image": "{{ asset('images/foto_perfil.jpg') }}",
          "sameAs": [
            "https://github.com/alvarodiegoprendes",
            "https://www.linkedin.com/in/alvaro-diego-6448032bb/",
            "https://alvarodiegoprendes.github.io/PortafolioElectronica/"
          ],
          "jobTitle": "Desarrollador Full Stack",
          "worksFor": {
            "@@type": "Organization",
            "name": "Freelance"
          },
          "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Valencia",
            "addressCountry": "ES"
          },
          "email": "alvarodiegoprendes@gmail.com",
          "telephone": "+34692852139",
          "knowsAbout": [
            "Python", "C++", "Laravel", "Django", "PHP", "JavaScript",
            "HTML", "CSS", "Bootstrap", "MySQL", "Git", "Linux", "Docker"
          ],
          "alumniOf": {
            "@@type": "EducationalOrganization",
            "name": "Formación en Desarrollo de Software"
          }
        },
        {
          "@@type": "WebSite",
          "@@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Álvaro Diego Prendes - Portafolio",
          "description": "Portafolio profesional de Álvaro Diego Prendes, desarrollador Full Stack especializado en Python, C++, Laravel y Django",
          "publisher": {
            "@@id": "{{ url('/') }}#person"
          },
          "inLanguage": "es-ES"
        },
        {
          "@@type": "ProfessionalService",
          "@@id": "{{ url('/') }}#service",
          "name": "Servicios de Desarrollo Web",
          "description": "Desarrollo de aplicaciones web, sitios web personalizados y soluciones de software",
          "provider": {
            "@@id": "{{ url('/') }}#person"
          },
          "areaServed": {
            "@@type": "Country",
            "name": "España"
          },
          "serviceType": [
            "Desarrollo Web Full Stack",
            "Desarrollo de Aplicaciones",
            "Consultoría Técnica",
            "Desarrollo Frontend",
            "Desarrollo Backend"
          ]
        }
      ]
    }
    </script>

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
