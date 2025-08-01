@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Awards'])

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
                <span class="text-decoration-underline">Awards</span>
              </nav>

              <!-- Title -->
              <h5 class="fw-bold mb-4 text-dark">Awards</h5>

              <!-- Awards Grid (2 columns) -->
              <div class="row row-cols-1 row-cols-md-2 g-4">
                @forelse ($awards as $award)
                  <div class="col">
                    <div class="card award-card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                      <div class="bg-white text-center px-2 py-3">
                        @if ($award->images->isNotEmpty())
                          <div class="d-flex flex-wrap justify-content-center gap-3">
                            @foreach ($award->images as $image)
                              <div class="award-img-wrapper">
                                <img src="{{ asset('storage/' . $image->image) }}"
                                     alt="{{ $award->name }}"
                                     class="img-fluid award-img"
                                     style="width: 100%; height: 200px; object-fit: contain;">
                              </div>
                            @endforeach
                          </div>
                        @else
                          <div class="bg-secondary-subtle text-muted py-5" style="height: 200px;">
                            No Image
                          </div>
                        @endif
                      </div>
                      <div class="card-body py-2 px-3">
                        <p class="mb-0 small text-center fw-medium">{{ $award->name }}</p>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-12">
                    <div class="alert alert-info">No awards found.</div>
                  </div>
                @endforelse
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hover Animations -->
  <style>
    .award-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .award-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .award-img-wrapper {
      width: 100%;
      height: 200px;
      overflow: hidden;
    }

    .award-img {
      transition: transform 0.3s ease;
    }

    .award-card:hover .award-img {
      transform: scale(1.03);
    }
  </style>
@endsection
