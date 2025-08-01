@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Experience'])

  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.services-sidebar')
        </div>

        <!-- Content Cards -->
        <div class="col-lg-9">
          <div class="row g-4">
            @foreach ($experiences as $experience)
              <div class="col-12">
                <div class="card border-0 shadow-sm h-100">
                  <div class="row g-0">
                    <!-- Image -->
                    <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                      @if($experience->image)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $experience->id }}">
                          <img src="{{ asset('storage/' . $experience->image) }}" class="img-fluid rounded shadow" style="max-height: 150px; object-fit: cover;" alt="Project Image">
                        </a>

                        <!-- Modal Zoom Image -->
                        <div class="modal fade" id="imageModal{{ $experience->id }}" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-transparent border-0">
                              <img src="{{ asset('storage/' . $experience->image) }}" class="img-fluid rounded">
                            </div>
                          </div>
                        </div>
                      @else
                        <div class="text-muted">No Image</div>
                      @endif
                    </div>

                    <!-- Info -->
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $experience->project_name }}</h5>
                        <p class="text-muted mb-1"><strong>Client:</strong> {{ $experience->client }}</p>
                        <p class="text-muted mb-1"><strong>Location:</strong> {{ $experience->location }}</p>
                        <p class="text-muted mb-1"><strong>Duration:</strong> {{ $experience->project_duration }}</p>

                        <p class="mb-2"><strong>Scope of Work:</strong><br>
                          {!! nl2br(e($experience->scope_of_work)) !!}
                        </p>

                        <p class="mb-0"><strong>Description:</strong><br>
                          {!! nl2br(e($experience->description)) !!}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
      });
    });
  </script>
@endsection
