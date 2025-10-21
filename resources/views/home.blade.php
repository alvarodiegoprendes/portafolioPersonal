@extends('layouts.app')

@section('title', 'Álvaro Diego Prendes - Programador Full Stack')
@section('meta_description', 'Desarrollador Full Stack especializado en Python, C++, Laravel y tecnologías web modernas. Contáctame para tu próximo proyecto.')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="display-3 fw-bold mb-4">Hola, soy Álvaro Diego Prendes</h1>
                <h2 class="display-6 mb-4">Programador Full Stack</h2>
                <p class="lead mb-4">Especializado en Laravel, Django y desarrollo web moderno</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#contact" class="btn btn-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Contáctame
                    </a>
                    <a href="#projects" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-folder-open me-2"></i>Ver Proyectos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-4 fw-bold">Sobre Mí</h2>
                <div class="d-inline-block bg-primary" style="height: 4px; width: 100px;"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                <img src="{{ asset('images/foto_perfil.jpg') }}" alt="Álvaro Diego Prendes" class="img-fluid rounded-circle shadow" style="max-width: 300px; width: 100%; height: 300px; object-fit: cover;">
            </div>
            <div class="col-lg-8">
                <h3 class="mb-4">Desarrollador Full Stack apasionado por la tecnología</h3>
                <p class="lead mb-4">
                    Soy un programador con experiencia en múltiples lenguajes y tecnologías.
                    Me especializo en crear soluciones web eficientes y escalables.
                </p>
                <p class="mb-4">
                    Con un enfoque en la calidad del código y las mejores prácticas de desarrollo,
                    trabajo tanto en el frontend como en el backend para crear aplicaciones completas y robustas.
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                            <div>
                                <h5 class="mb-0">Desarrollo Backend</h5>
                                <p class="mb-0 text-muted">Laravel, Django, C++</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success fa-2x me-3"></i>
                            <div>
                                <h5 class="mb-0">Desarrollo Frontend</h5>
                                <p class="mb-0 text-muted">HTML, CSS, Bootstrap, Livewire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-4 fw-bold">Mis Proyectos</h2>
                <div class="d-inline-block bg-primary" style="height: 4px; width: 100px;"></div>
                <p class="lead mt-3">Algunos de los proyectos en los que he trabajado</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Proyecto 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <i class="fas fa-folder-open fa-3x text-primary"></i>
                            <a href="https://github.com/alvarodiegoprendes" target="_blank" class="text-dark">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </div>
                        <h5 class="card-title">Proyecto Django Rest</h5>
                        <p class="card-text">Aplicación desarrollada con Django Rest Framework para el manejo de un CRM</p>
                        <div class="mt-3">
                            <span class="badge bg-primary">Python</span>
                            <span class="badge bg-secondary">Django</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <i class="fas fa-folder-open fa-3x text-primary"></i>
                            <a href="https://github.com/alvarodiegoprendes" target="_blank" class="text-dark">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </div>
                        <h5 class="card-title">Recursos de C++ y Python</h5>
                        <p class="card-text">Repositorio de ejemplos y recursos para C++ y Python.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary">C++</span>
                            <span class="badge bg-secondary">Python</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <i class="fas fa-folder-open fa-3x text-primary"></i>
                            <a href="https://github.com/alvarodiegoprendes" target="_blank" class="text-dark">
                                <i class="fab fa-github fa-2x"></i>
                            </a>
                        </div>
                        <h5 class="card-title">Aplicación Web Laravel</h5>
                        <p class="card-text">Plataforma web completa desarrollada con Laravel y Bootstrap.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-secondary">Bootstrap</span>
                            <span class="badge bg-info">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 4 - Envipi -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project h-100">
                    <img src="{{ asset('images/envipi.png') }}" class="card-img-top" alt="Envipi" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h5 class="card-title mb-0">Envipi</h5>
                            <a href="https://envipi.es/" target="_blank" class="text-primary">
                                <i class="fas fa-external-link-alt fa-lg"></i>
                            </a>
                        </div>
                        <p class="card-text flex-grow-1">Plataforma web para gestión de envíos y logística. Solución completa para empresas de transporte y paquetería.</p>
                        <div class="mt-auto">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-secondary">MySQL</span>
                            <span class="badge bg-info">Web Development</span>
                        </div>
                        <a href="https://envipi.es/" target="_blank" class="btn btn-outline-primary btn-sm mt-3 w-100">
                            <i class="fas fa-globe me-2"></i>Visitar Sitio
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 5 - Amatxomaitea -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project h-100">
                    <img src="{{ asset('images/amatoxomaitea.png') }}" class="card-img-top" alt="Amatxomaitea" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h5 class="card-title mb-0">Amatxomaitea</h5>
                            <a href="https://www.amatxomaitea.com/" target="_blank" class="text-primary">
                                <i class="fas fa-external-link-alt fa-lg"></i>
                            </a>
                        </div>
                        <p class="card-text flex-grow-1">Sitio web de una panadería. Diseño atractivo enfocado en la experiencia de usuario.</p>
                        <div class="mt-auto">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-secondary">CSS3</span>
                            <span class="badge bg-info">Responsive</span>
                        </div>
                        <a href="https://www.amatxomaitea.com/" target="_blank" class="btn btn-outline-primary btn-sm mt-3 w-100">
                            <i class="fas fa-globe me-2"></i>Visitar Sitio
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 6 - Portafolio Electrónica -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-project h-100">
                    <img src="{{ asset('images/taller_electronica.png') }}" class="card-img-top" alt="Portafolio Electrónica" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h5 class="card-title mb-0">Portafolio Electrónica</h5>
                            <a href="https://alvarodiegoprendes.github.io/PortafolioElectronica/" target="_blank" class="text-primary">
                                <i class="fas fa-external-link-alt fa-lg"></i>
                            </a>
                        </div>
                        <p class="card-text flex-grow-1">Portafolio de proyectos de electrónica y hardware. Galería interactiva con proyectos de Arduino, Raspberry Pi y más.</p>
                        <div class="mt-auto">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                            <span class="badge bg-info">GitHub Pages</span>
                        </div>
                        <a href="https://alvarodiegoprendes.github.io/PortafolioElectronica/" target="_blank" class="btn btn-outline-primary btn-sm mt-3 w-100">
                            <i class="fas fa-globe me-2"></i>Visitar Sitio
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <a href="https://github.com/alvarodiegoprendes" target="_blank" class="btn btn-primary btn-lg">
                    <i class="fab fa-github me-2"></i>Ver más en GitHub
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-4 fw-bold">Habilidades Técnicas</h2>
                <div class="d-inline-block bg-primary" style="height: 4px; width: 100px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="mb-4"><i class="fas fa-code me-2 text-primary"></i>Lenguajes de Programación</h4>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Python</span>
                        <span class="fw-bold">90%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>C++</span>
                        <span class="fw-bold">85%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>PHP</span>
                        <span class="fw-bold">88%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 88%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>JavaScript</span>
                        <span class="fw-bold">80%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="mb-4"><i class="fas fa-tools me-2 text-primary"></i>Frameworks y Tecnologías</h4>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Laravel</span>
                        <span class="fw-bold">90%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Bootstrap</span>
                        <span class="fw-bold">92%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>MySQL</span>
                        <span class="fw-bold">85%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Git & GitHub</span>
                        <span class="fw-bold">88%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h4 class="mb-4">Otras Habilidades</h4>
                <span class="badge skill-badge bg-primary">HTML5</span>
                <span class="badge skill-badge bg-primary">CSS3</span>
                <span class="badge skill-badge bg-primary">Responsive Design</span>
                <span class="badge skill-badge bg-success">API REST</span>
                <span class="badge skill-badge bg-success">MVC</span>
                <span class="badge skill-badge bg-info">Docker</span>
                <span class="badge skill-badge bg-info">Linux</span>
                <span class="badge skill-badge bg-warning">Agile/Scrum</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-4 fw-bold">Contáctame</h2>
                <div class="d-inline-block bg-primary" style="height: 4px; width: 100px;"></div>
                <p class="lead mt-3">¿Tienes un proyecto en mente? ¡Hablemos!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Envíame un mensaje</h4>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                       id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control @error('message') is-invalid @enderror"
                                          id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Enviar Mensaje
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5 d-flex flex-column">
                        <h4 class="mb-4">Información de Contacto</h4>
                        <div class="mb-4 flex-grow-1">
                            <div class="d-flex align-items-start mb-4">
                                <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                                <div>
                                    <h5>Email</h5>
                                    <p class="mb-0"><a href="mailto:alvarodiegoprendes@gmail.com">alvarodiegoprendes@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <i class="fab fa-whatsapp fa-2x text-primary me-3"></i>
                                <div>
                                    <h5>WhatsApp</h5>
                                    <p class="mb-0">
                                        <a href="https://wa.me/34692852139" target="_blank">
                                            +34 692 852 139
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <i class="fab fa-github fa-2x text-primary me-3"></i>
                                <div>
                                    <h5>GitHub</h5>
                                    <p class="mb-0">
                                        <a href="https://github.com/alvarodiegoprendes" target="_blank">
                                            @alvarodiegoprendes
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-4">
                                <i class="fab fa-linkedin fa-2x text-primary me-3"></i>
                                <div>
                                    <h5>LinkedIn</h5>
                                    <p class="mb-0">
                                        <a href="https://www.linkedin.com/in/alvaro-diego-6448032bb/" target="_blank">
                                            Álvaro Diego Prendes
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="mt-auto">
                            <h5 class="mb-3">Disponibilidad</h5>
                            <p class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Disponible para proyectos freelance
                            </p>
                            <p class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Colaboraciones remotas
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Consultoría técnica
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra_js')
<script>
    // Smooth scrolling para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Abrir WhatsApp automáticamente si hay una URL
    @if(session('whatsapp_url'))
        window.open('{{ session('whatsapp_url') }}', '_blank');
    @endif
</script>
@endsection
