@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Certificates'])

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.values-sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

              <!-- Breadcrumb -->
              <nav class="mb-3 text-muted small">
                <a href="/safety" class="text-muted text-decoration-none">Our Values</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Certificates</span>
              </nav>

              <!-- Title -->
              <h4 class="fw-bold mb-4 text-dark">Certificates</h4>

              <!-- Certificates Grid (3 columns) -->
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @forelse ($certificates as $certificate)
                  <div class="col">
                    <div class="card certificate-card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                      @if ($certificate->image)
                        <div class="bg-white d-flex align-items-center justify-content-center" style="height: 200px;">
                          <img src="{{ asset('storage/' . $certificate->image) }}"
                               class="img-fluid certificate-img"
                               style="max-height: 100%; max-width: 100%; object-fit: contain;"
                               alt="{{ $certificate->name }}">
                        </div>
                      @else
                        <div class="bg-secondary-subtle text-center py-5 text-muted" style="height: 200px;">
                          No Image
                        </div>
                      @endif
                      <div class="card-body py-2 px-3">
                        <p class="mb-0 small text-center fw-medium">{{ $certificate->name }}</p>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12">
                    <div class="alert alert-info">No certificates found.</div>
                  </div>
                @endforelse
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .certificate-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .certificate-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .certificate-img {
      transition: transform 0.3s ease;
    }

    .certificate-card:hover .certificate-img {
      transform: scale(1.02);
    }
  </style>
@endsection
