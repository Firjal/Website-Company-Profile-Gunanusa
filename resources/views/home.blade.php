@extends('layout')

@section('title', 'Home')

@section('content')
    
    <!-- Hero Section -->
    <section id="hero" style="margin-top: -25px">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="height: 100vh; position: relative;">
                <img src="{{ asset('images/home/slide1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 1">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 text-shadow-dark">
                <h1 class="display-3 fw-bold text-white animate__animated animate__fadeInDown">PT Gunanusa Utama Fabricators</h1>
                <p class="fs-5 text-white animate__animated animate__fadeInUp">Leading EPCIC Offshore & Onshore Platform Specialist Since 1980</p>
                <a href="#about" class="btn btn-warning px-4 py-2 fw-semibold rounded mt-3 text-shadow-none animate__animated animate__zoomIn">
                    Learn More
                </a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="height: 100vh; position: relative;">
                <img src="{{ asset('images/home/slide2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 text-shadow-dark">
                <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">Global Reputation</h1>
                <p class="fs-5 text-white animate__animated animate__fadeInUp">Over 100 Offshore Platform Projects Successfully Completed</p>
                <a href="#about" class="btn btn-warning px-4 py-2 fw-semibold rounded mt-3 text-shadow-none animate__animated animate__zoomIn">
                    Learn More
                </a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="height: 100vh; position: relative;">
                <img src="{{ asset('images/home/slide3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 3">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 text-shadow-dark">
                <h1 class="display-4 fw-bold text-white animate__animated animate__fadeInDown">Massive Capacity</h1>
                <p class="fs-5 text-white animate__animated animate__fadeInUp">18 Hectares Yard Area with Workforce Up to 6,500 People</p>
                <a href="#about" class="btn btn-warning px-4 py-2 fw-semibold rounded mt-3 text-shadow-none animate__animated animate__zoomIn">
                    Learn More
                </a>
                </div>
            </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-white" style="scroll-margin-top: 80px;">
    <div class="container">
        <!-- Bagian Logo dan Statistik -->
        <div class="row align-items-center mb-5">
        <div class="col-lg-6 text-center mb-4 mb-lg-0" data-aos="fade-up">
            <img src="{{ asset('images/logo-gunanusa.png') }}" alt="Logo Gunanusa" class="img-fluid mb-4" style="max-height: 100px;">

            <div class="d-flex justify-content-center justify-content-lg-around gap-4 flex-wrap text-center">
            <div>
                <p class="mb-1 text-secondary">Since</p>
                <h4 class="fw-bold">1980</h4>
            </div>
            <div>
                <p class="mb-1 text-secondary">Employees</p>
                <h4 class="fw-bold">6,500+</h4>
            </div>
            <div>
                <p class="mb-1 text-secondary">Projects</p>
                <h4 class="fw-bold">100+</h4>
            </div>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-start" data-aos="fade-down">
            <h2 class="fw-bold mb-3">About Us</h2>
            <div class="border-top border-warning border-3 mx-auto mx-lg-2 mb-4" style="width: 115px;"></div>
            <p>PT Gunanusa Utama Fabricators is a leading Indonesian company specializing in the fabrication of offshore and onshore oil and gas platforms. Established in 1980, we have built a strong reputation for delivering complex EPCIC (Engineering, Procurement, Construction, Installation, and Commissioning) projects globally.</p>
            <p>With an 18-hectare yard and a waterfront of 800 meters, we are capable of handling major offshore structures such as jackets, topsides, modules, and process platforms.</p>
        </div>
        </div>

        <!-- Bagian Gambar dan Visi -->
        <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in">
            <img src="{{ asset('images/home/about.jpg') }}" class="img-fluid rounded" alt="About">
        </div>
        <div class="col-lg-6 text-center text-lg-start" data-aos="fade-up" data-aos-delay="100">
            <h4 class="fw-bold mb-3">We Deliver Global-Standard Solutions with Proven Experience</h4>
            <p>Our capability is backed by decades of experience, technical excellence, and a highly skilled workforce. Gunanusa has successfully completed projects for major oil & gas companies such as Pertamina, Total, BP, and Chevron.</p>
            <p>We remain committed to safety, quality, and innovation to support the global energy infrastructure.</p>
        </div>
        </div>
    </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Why Us?</h2>
            <div class="border-top border-warning border-3 mx-auto mb-5" style="width: 100px;"></div>
            </div>

            <div class="row row-cols-2 row-cols-lg-3 g-4 text-center">
                @php
                    $cards = [
                    ['icon' => 'certified.png', 'title' => 'Certified', 'desc' => ['ISO 9001', 'ISO 45001', 'ASME S / U / PP / U2 / R']],
                    ['icon' => 'experience.png', 'title' => 'Experience', 'desc' => ['Since 1980s', '40+ years in offshore fabrication']],
                    ['icon' => 'facility.png', 'title' => 'Complete Facilities', 'desc' => ['18 Ha Yard Area', '200m Jetty with 13m draft']],
                    ['icon' => 'engineering.png', 'title' => 'Engineering', 'desc' => ['In-house design', 'FEED & Detailed Eng.']],
                    ['icon' => 'support.png', 'title' => 'Great Support', 'desc' => ['Project Dedicated Team', 'Client-focused']],
                    ['icon' => 'strategic.png', 'title' => 'Strategic Area', 'desc' => ['Near Port Ciwandan', 'Direct sea access']],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col" data-aos="flip-left" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="why-card position-relative bg-white border rounded shadow-sm p-4 h-100">
                            <h6 class="fw-bold mb-3">{{ $card['title'] }}</h6>

                            <div class="why-icon-wrapper">
                            <img src="{{ asset('icons/' . $card['icon']) }}" alt="{{ $card['title'] }}" class="why-icon">
                            <div class="why-facts animate__animated" data-facts="{{ implode(' | ', $card['desc']) }}">
                                @foreach ($card['desc'] as $line)
                                <div>{{ $line }}</div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
    document.querySelectorAll('.why-card').forEach(card => {
        const facts = card.querySelector('.why-facts');

        card.addEventListener('mouseenter', () => {
        facts.classList.add('animate__fadeInUp');
        facts.style.opacity = 1;
        });

        card.addEventListener('mouseleave', () => {
        facts.classList.remove('animate__fadeInUp');
        facts.style.opacity = 0;
        });
    });
    </script>

    <!-- Quality Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
            
            <!-- Image di atas pada mobile -->
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 text-center" data-aos="fade-right">
                <img src="{{ asset('images/home/quality.jpg') }}" alt="Gunanusa Yard Facility" class="img-fluid rounded">
            </div>

            <!-- Text -->
            <div class="col-md-6 order-2 order-md-1 text-center text-md-start" data-aos="fade-left">
                <h3 class="fw-bold">
                Precision Fabrication with Global Quality Standards
                </h3>
                <p class="mt-3 fs-5">
                With decades of experience and certifications like ISO 9001, ISO 14001, and ASME U/U2/S,
                PT Gunanusa Utama Fabricators commits to delivering precision-engineered platforms without
                compromising safety, quality, or environmental standards.
                </p>
            </div>

            </div>
        </div>
    </section>


    <!-- Clients Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Our Clients</h2>
            <div class="border-top border-warning border-3 mx-auto mb-5" style="width: 120px;"></div>

            <div class="position-relative overflow-hidden">
            <div class="d-flex slide-track" style="gap: 40px;">
                @foreach([
                    'pertamina', 'total', 'bp', 'chevron',
                    'conocophillips', 'hess', 'pttep', 'ongc',
                    'petronas', 'amman'
                ] as $index => $client)
                    <div class="client-logo d-flex align-items-center justify-content-center p-3 bg-white shadow rounded"
                        data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                        <img src="{{ asset('images/clients/' . $client . '.png') }}"
                            alt="{{ ucfirst($client) }}" class="img-fluid"
                            style="height: 60px; object-fit: contain;">
                    </div>
                @endforeach

                @foreach([
                    'pertamina', 'total', 'bp', 'chevron',
                    'conocophillips', 'hess', 'pttep', 'ongc',
                    'petronas', 'amman'
                ] as $index => $client)
                    <div class="client-logo d-flex align-items-center justify-content-center p-3 bg-white shadow rounded"
                        data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                        <img src="{{ asset('images/clients/' . $client . '.png') }}"
                            alt="{{ ucfirst($client) }}" class="img-fluid"
                            style="height: 60px; object-fit: contain;">
                    </div>
                @endforeach

            </div>
            </div>
        </div>
    </section>

@endsection