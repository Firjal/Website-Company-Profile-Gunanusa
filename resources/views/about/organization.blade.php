@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'About'])

  <section class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.about-sidebar')
        </div>

        <!-- Konten Utama -->
        <div class="col-lg-9">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <!-- Breadcrumb -->
              <nav class="mb-3 text-muted small">
                <a href="/history" class="text-muted text-decoration-none">About</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Organization</span>
              </nav>

              <!-- Accordion -->
              <div class="accordion" id="organizationAccordion">

                <!-- Organization Structure (OPEN by default) -->
                <div class="accordion-item border-0 mb-3">
                  <h2 class="accordion-header" id="headingStructure">
                    <button class="accordion-button bg-light fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStructure" aria-expanded="true" aria-controls="collapseStructure">
                      Organization Structure
                    </button>
                  </h2>
                  <div id="collapseStructure" class="accordion-collapse collapse show" aria-labelledby="headingStructure">
                    <div class="accordion-body text-center">
                      <img src="{{ asset('images/organization.png') }}" alt="Organization Chart" class="img-fluid rounded shadow-sm">
                    </div>
                  </div>
                </div>

                <!-- Management Team (CLOSED by default) -->
                <div class="accordion-item border-0 mb-3">
                  <h2 class="accordion-header" id="headingManagement">
                    <button class="accordion-button bg-light fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseManagement" aria-expanded="false" aria-controls="collapseManagement">
                      Management Team
                    </button>
                  </h2>
                  <div id="collapseManagement" class="accordion-collapse collapse" aria-labelledby="headingManagement">
                    <div class="accordion-body">
                      <ul class="list-unstyled">
                        <li class="mb-3 bg-light p-3 rounded">
                          <strong>LINAYATI SUKARDI</strong><br>
                          <span class="text-muted small">President Director</span>
                        </li>
                        <li class="mb-3 bg-light p-3 rounded">
                          <strong>GIAN FRANCO DESOGUS</strong><br>
                          <span class="text-muted small">Deputy President Director</span>
                        </li>
                        <li class="mb-3 bg-light p-3 rounded">
                          <strong>Eddy Gunawin</strong><br>
                          <span class="text-muted small">VP Admin, Finance, & Control</span>
                        </li>
                        <li class="mb-3 bg-light p-3 rounded">
                          <strong>IWAN SANTOSA</strong><br>
                          <span class="text-muted small">VP Supply Chains Management</span>
                        </li>
                        <li class="mb-3 bg-light p-3 rounded">
                          <strong>DADAN A. KOMARUDIN</strong><br>
                          <span class="text-muted small">VP HRD & GA</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
