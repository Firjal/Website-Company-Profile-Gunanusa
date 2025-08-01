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
                <span class="text-decoration-underline">Engineering</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Engineering</h3>

              <!-- Konten -->
              <p class="text-justify">
                The core of Gunanusa engineering team is a group of senior engineers from various disciplines (structural, piping, mechanical, electrical and instrumentation) with at least 10 years experience in oil and gas offshore platform fabrication.
              </p>
              <p class="text-justify">
                During the bidding stage, the engineering team supports the bidding team by preparing Materials Take Off / Bill of Materials and Materials Requisition (RFQ)), as well as by providing technical review of the specifi cation given by vendors.
              </p>
              <p class="text-justify">
                The construction engineering team at Gunanusa yard performs the preparation of fabrication and construction drawings which provide the base for fabrication work. They are also experienced in the design of pressure vessels and boilers, according to ASME and BS standards.
              </p>
              <p class="text-justify">
                For load-out activities, the engineering team undertakes structural and ballast calculations to ensure a smooth and safe operation.
              </p>
              <p class="text-justify">
                To support the engineering activities,Gunanusa utilizes a number of engineering software namely SACS (structure), Caesar (piping), PDMS, PV Elite (pressure vessel), Finglow (pressure vessel), etc. We also have a comprehensive engineering library of engineering dossiers, as-built documents, procedures, standards, etc to speed up the engineering process.
              </p>
              <p class="text-justify mb-0">
                For detail engineering, we are supported by well known and reputable engineering firms who have worked for us for many years.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
