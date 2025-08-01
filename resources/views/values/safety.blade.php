@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Our Values'])

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
                <span class="text-decoration-underline">Safety</span>
              </nav>

              <!-- Title -->
              <h4 class="fw-bold mb-4">Safety</h4>

              <!-- Safety Objectives -->
              <div class="mb-4">
                <h5 class="fw-semibold text-dark mb-3">
                  I. Safety Objectives — <span class="text-success">TARGET ZERO</span>
                </h5>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item">✅ Safety Objective #1: <strong>HUMAN DIMENSION</strong></li>
                  <li class="list-group-item">✅ Safety Objective #2: <strong>TRIR &lt; 1.50</strong> (Total Recordable Injury Rate)</li>
                  <li class="list-group-item">✅ Safety Objective #3: <strong>LTIF &lt; 0.50</strong> (Lost Time Injury Frequency)</li>
                  <li class="list-group-item">✅ Safety Objective #4: <strong>HSE Management System and Performance Management</strong></li>
                  <li class="list-group-item">✅ Safety Objective #5: <strong>SAFETY BEHAVIOR</strong></li>
                  <li class="list-group-item">✅ Safety Objective #6: <strong>Subcontractor Management</strong></li>
                </ul>
              </div>

              <!-- Occupational Health -->
              <div class="mb-4">
                <h5 class="fw-semibold text-dark mb-3">II. Occupational Health Objectives</h5>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item">🩺 Ensure all employees undergo <strong>Medical Check-Up</strong> with valid certificates</li>
                  <li class="list-group-item">🧾 Proper diagnosis and reporting of <strong>occupational illness or work-related disease</strong></li>
                  <li class="list-group-item">👨‍⚕️ Qualified doctor and <strong>medical supplies</strong> available on-site during the project</li>
                </ul>
              </div>

              <!-- Environmental Objectives -->
              <div class="mb-4">
                <h5 class="fw-semibold text-dark mb-3">III. Environmental Objectives</h5>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item">🌱 Ensure <strong>no oil spills</strong> and minimize dust exposure during sandblasting</li>
                  <li class="list-group-item">♻️ Improve overall <strong>waste management</strong></li>
                </ul>
              </div>

              <!-- Certification Commitment Box -->
              <div class="bg-white border rounded p-4 mb-3 shadow-sm">
                <h6 class="fw-semibold text-success mb-2">Commitment to Safety & Environment</h6>
                <p class="text-secondary mb-2">
                  All employees and partners/subcontractors of <strong>PT Gunanusa Utama Fabricators</strong> are expected to actively participate in achieving the above objectives.
                </p>
                <p class="text-secondary mb-0">
                  Our operations follow the <strong>HSE Policy & Programs</strong>, regulated by a robust HSE Management System and national standards.
                </p>
              </div>

              <!-- Certification List -->
              <div class="bg-light border-start border-4 border-success ps-3 py-3">
                <ul class="mb-0 text-secondary small">
                  <li>📄 ISO 45001:2018 (Cert No. OHS.00024)</li>
                  <li>📄 ISO 14001:2015 (Cert No. EMS.00079)</li>
                  <li>🏅 SMK3 Certification — Ministry of Employment of the Republic of Indonesia</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
