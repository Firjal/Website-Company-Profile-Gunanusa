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
                <span class="text-decoration-underline">Constructions Engineering</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Constructions Engineering</h3>

              <!-- Konten -->
              <p class="text-justify">
                The construction engineering team at Gunanusa yard performs the preparation of fabrication and construction drawings, which provide the base for fabrication work. They are also experienced in the design of pressure vessels and boilers, according to ASME and BS standards for load-out activities, the engineering team undertakes structural and ballast calculations to ensure a smooth and safe operation.
              </p>
              <p class="text-justify">
                To support the engineering activities, Gunanusa utilizes a number of engineering software namely SACS (structure), Caesar (piping), Drafting Machine, AutoCAD, Tekla Modeling, PDMS Modeling andPDMS Review, PV Elite (pressure vessel), Finglow (pressure vessel), A0 Plotter HP Design Jet, etc.
              </p>
              <p class="text-justify">
                We also have a comprehensive engineering library (FTP soft copy) of engineering dossiers, as-built documents, procedures, standards, etc to speed up the engineering process.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
