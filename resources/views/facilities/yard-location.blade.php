@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Facilities'])

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.facilities-sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
          <!-- Breadcrumb -->
          <nav class="mb-3 text-muted small">
            <a href="/yard-location" class="text-muted text-decoration-none">Facilities</a>
            &nbsp;&gt;&nbsp;
            <span class="text-decoration-underline">Yard Location</span>
          </nav>

          <!-- Judul -->
          <h2 class="fw-bold mb-3 text-dark">Yard Location</h2>

          <!-- Gambar + Alamat (terpusat horizontal) -->
          <div class="d-flex justify-content-center">
            <div class="card border-0 shadow-sm mb-4 p-3 rounded text-center" style="max-width: 800px; width: 100%;">
              <img src="{{ asset('images/yard-location.png') }}" alt="Yard Location" class="img-fluid rounded mx-auto d-block" style="max-height: 280px; object-fit: cover;">
              
              <div class="bg-warning bg-opacity-75 text-dark px-3 py-2 d-inline-block rounded small fw-semibold mt-2">
                📍 Desa Margasari, Pulo Ampel, Serang - Banten
              </div>
            </div>
          </div>


          <!-- Highlight Info Box -->
          <div class="bg-light p-4 rounded mb-4">
            <p class="text-secondary mb-2">
              PT Gunanusa Utama Fabricators yard is strategically located at <strong>Desa Margasari, Kecamatan Pulo Ampel, Kabupaten Serang, Banten, Indonesia</strong> — approximately <strong>120 km or 2 hours</strong> by car from Jakarta. Its proximity to the <strong>Sunda Strait</strong> and <strong>Ciwandan Port</strong> offers a strong logistical advantage for offshore operations and international transport.
            </p>
            <p class="text-secondary mb-0">
              The yard spans approximately <strong>176,559 m²</strong> (around <strong>18 hectares</strong>) and includes more than <strong>800 meters of open waterfront</strong>, enabling efficient fabrication, integration, and load-out of offshore platforms, jackets, and topsides.
            </p>
          </div>

          <!-- Detail List (with icons) -->
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="bg-white border rounded p-3 h-100 shadow-sm">
                <h6 class="fw-semibold mb-2 text-warning">Key Specs</h6>
                <ul class="list-unstyled small text-secondary mb-0">
                  <li>📐 176,559 m² Total Area</li>
                  <li>🌊 200m Jetty with 13m Depth</li>
                  <li>⚙️ 800m of Open Waterfront</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="bg-white border rounded p-3 h-100 shadow-sm">
                <h6 class="fw-semibold mb-2 text-warning">Logistics</h6>
                <ul class="list-unstyled small text-secondary mb-0">
                  <li>🚢 Direct Sea Access</li>
                  <li>🏗️ Heavy Load-Out Capacity</li>
                  <li>🧭 Near Ciwandan International Port</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Closing -->
          <p class="text-secondary mt-4">
            Gunanusa’s location and marine-accessible infrastructure help ensure <strong>efficient delivery</strong> and <strong>schedule reliability</strong> for international offshore projects.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
