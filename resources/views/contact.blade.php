@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Contact'])

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">

        <!-- Head Office -->
        <div class="col-md-6 mb-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <h4 class="fw-bold text-dark mb-3">🏢 Head Office</h4>
              <p class="mb-1 text-secondary">South Quarter Building, Tower A, 16th Floor</p>
              <p class="mb-1 text-secondary">Jl. R.A. Kartini Kav. 8, Cilandak Barat</p>
              <p class="mb-3 text-secondary">Jakarta Selatan 12430, Indonesia</p>

              <ul class="list-unstyled text-secondary small mb-3">
                <li><strong>Telp:</strong> +62‑21‑5703329</li>
                <li><strong>Fax:</strong> +62‑21‑5703334</li>
                <li><strong>Email:</strong></li>
                <li class="ps-3">business_dev@gunanusa.co.id</li>
                <li class="ps-3">bidding@gunanusa.co.id</li>
              </ul>

              <a href="https://www.google.com/maps/place/South+Quarter/@-6.2943323,106.7821138,694m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2e69f1459c0783e7:0x2a7c89b9fce0bb90!8m2!3d-6.2943376!4d106.7846887!16s%2Fg%2F11hb333sh4?entry=ttu&g_ep=EgoyMDI1MDcxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank"
                 class="btn btn-warning btn-sm text-dark"
                 onmouseover="this.classList.add('btn-dark');"
                 onmouseout="this.classList.remove('btn-dark')">
                📍 See Maps
              </a>
            </div>
          </div>
        </div>

        <!-- Yard -->
        <div class="col-md-6 mb-4">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <h4 class="fw-bold text-dark mb-3">🏭 Yard</h4>
              <p class="mb-1 text-secondary">Desa Margasari, Kecamatan Pulo Ampel, Serang</p>
              <p class="mb-3 text-secondary">Banten 42455, Indonesia</p>

              <ul class="list-unstyled text-secondary small mb-3">
                <li><strong>Telp:</strong></li>
                <li class="ps-3">+62‑254‑575‑0088</li>
                <li class="ps-3">+62‑254‑575‑0306</li>
                <li><strong>Fax:</strong> +62‑254‑575‑0091</li>
              </ul>

              <a href="https://www.google.com/maps/place/PT.+Gunanusa+Utama+Fabricators/@-5.9280734,106.1050354,694m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2e41939c29a54737:0x1f306426c07acddb!8m2!3d-5.9280787!4d106.1076103!16s%2Fg%2F1hf0_18s4?entry=ttu&g_ep=EgoyMDI1MDcxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank"
                 class="btn btn-warning btn-sm text-dark"
                 onmouseover="this.classList.add('btn-dark');"
                 onmouseout="this.classList.remove('btn-dark')">
                📍 See Maps
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
