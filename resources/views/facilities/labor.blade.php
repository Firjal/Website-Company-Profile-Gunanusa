@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Industrial Model'])

  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.facilities-sidebar')
        </div>

        <!-- Konten Utama -->
        <div class="col-lg-9">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <!-- Breadcrumb -->
              <nav class="mb-3 text-muted small">
                <a href="/yard-location" class="text-muted text-decoration-none">Facilities</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Labor</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Labor</h3>

              <!-- Konten -->
              <p class="text-justify">
                Key personnel for construction and assembly by fabricated equipment & structures are recruited as required from GUNANUSA associated companies. Local craftsmen have been trained in code welding, layout and equipment operations. Labor from other areas of Indonesia has been recruited and where necessary trained to fill skilled and semi-skilled positions in the yard.
              </p>
              <p class="text-justify">
                A training program for local welders, pipe fitters and other skilled crafts is conducted to ensure an adequate of skilled craftsmen.
              </p>
              <p>
                WE have had 6500 personals working at peak period.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
