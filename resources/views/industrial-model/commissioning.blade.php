@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Industrial Model'])

  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-4 mb-4">
          @include('components.industrialmodel-sidebar')
        </div>

        <!-- Konten Utama -->
        <div class="col-md-8">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <!-- Breadcrumb -->
              <nav class="mb-3 text-muted small">
                <a href="/history" class="text-muted text-decoration-none">About</a>
                &nbsp;&gt;&nbsp;
                <a href="/industrial-model/engineering" class="text-muted text-decoration-none">Industrial Model</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Commissioning</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Commissioning</h3>

              <!-- Konten -->
              <p class="text-justify">
                Service Pre Commissioning/Commissioning is executed using all the modern tools and technologies associated with our products. This includes a full physical and functional examination of the equipment and installation. Specific activities are defined by individual product instructions and start-up procedures that can be tailored to the particular application, taking into account local metrological requirements, best practices and site safety policies.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
