@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Services'])

  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.services-sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
          <div class="card border-0 shadow-sm mb-5">
            <div class="card-body p-4">

              <!-- Project Header -->
              <div class="d-flex align-items-center mb-4">
                
                <div class="col-8">
                  <h5 class="fw-bold mb-1">Hidayah Field Phase 1 Development</h5>
                  <small class="text-muted">Awarded: 9 November 2024</small>
                </div>
                <div class="col-4">
                  <img src="{{ asset('images/current-project/logo-hidayah.jpg') }}" alt="Logo Gunanusa" style="height: 50px;" class="me-3">
                </div>
              </div>

              <!-- Project Info -->
              <ul class="list-unstyled mb-4">
                <div class="mb-4">
                  <div class="row mb-2">
                    <div class="col-3 fw-semibold text-muted">Owner Project</div>
                    <div class="col-9">PC North Madura II Ltd</div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-3 fw-semibold text-muted">Contractor</div>
                    <div class="col-9">Consortium PT Gunanusa Utama Fabricators and PT Hafar Daya Konstruksi</div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-3 fw-semibold text-muted">Project</div>
                    <div class="col-9">Provision of Engineering, Procurement, Construction, Installation and Commissioning (EPCIC) of Integrated Wellhead Central Processing Platform (WHCPP), Subsea Pipeline and Pipeline End Terminal (PLET) for Hidayah Field Phase 1 Development Project</div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-3 fw-semibold text-muted">Location</div>
                    <div class="col-9">North of Madura Island, East Java Sea</div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-3 fw-semibold text-muted">PO/Contract No.</div>
                    <div class="col-9">4850000716</div>
                  </div>
                </div>
              </ul>

              <!-- Description -->
              <h6 class="fw-bold mb-2">Project Description</h6>
              <ul class="ps-3">
                <li>EPCIC of 1 Integrated Wellhead Central Processing Platform (WH-CPP)</li>
                <li>Topside: 4,512 MT</li>
                <li>Substructure (6 legs Jacket): 4,200 MT incl. pile, boat landing, mating cone</li>
                <li>Pipeline: 16” x 1 KM (Carbon Steel)</li>
                <li>PLET: 1 unit</li>
                <li>Flexible riser: 16”</li>
                <li>Remote Central Control Room (CCR) installed at Hidayah FSO</li>
              </ul>
            </div>
          </div>

          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

              <!-- Project Header -->
              <div class="d-flex align-items-center mb-4">
                
                <div class="col-8">
                  <h5 class="fw-bold mb-1">Supply of Fabricated Pipe Spool and Rubber Lining</h5>
                  <small class="text-muted">Awarded: 01 December 2023</small>
                </div>
                <div class="col-4">
                  <img src="{{ asset('images/current-project/logo-amman.jpg') }}" alt="Logo Amman" style="height: 50px;" class="me-3">
                </div>
              </div>

              <!-- Project Info -->
              <div class="mb-4">
                <div class="row mb-2">
                  <div class="col-3 fw-semibold text-muted">Owner Project</div>
                  <div class="col-9">PT. AMMAN MINERAL NUSA TENGGARA</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 fw-semibold text-muted">Contractor</div>
                  <div class="col-9">PT. GUNANUSA UTAMA FABRICATORS</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 fw-semibold text-muted">Project</div>
                  <div class="col-9">Supply of Fabricated Pipe Spool and Rubber Lining</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 fw-semibold text-muted">Location</div>
                  <div class="col-9">Sumbawa - Nusa Tenggara Barat</div>
                </div>
                <div class="row mb-2">
                  <div class="col-3 fw-semibold text-muted">PO/Contract No.</div>
                  <div class="col-9">BH2390500me</div>
                </div>
              </div>

              <!-- Description -->
              <h6 class="fw-bold mb-2">Project Description</h6>
              <ul class="ps-3">
                <li>Fabrication of Pipe Spool</li>
                <li>Rubber Lining Work</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
