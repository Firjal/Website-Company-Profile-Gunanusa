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
                <a href="/quality" class="text-muted text-decoration-none">Our Values</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Quality</span>
              </nav>

              <!-- Title -->
              <h4 class="fw-bold mb-4 text-dark">Quality</h4>

              <!-- Opening Statement -->
              <p class="text-secondary mb-4">
                We are committed and responsible to achieve Quality Objective. The adherence to the commitments is aimed to:
                <strong class="text-dark">“Deliver the project safely within schedule, within budget and conformity of processes/product, comply with technical specifications and enhancement of COMPANY satisfaction.”</strong>
              </p>

              <!-- Commitment Card -->
              <div class="bg-white rounded border-start border-4 border-warning shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-dark mb-3">To achieve the objective, we demonstrate mutual commitment to quality through:</h5>
                <ul class="mb-0 list-unstyled text-secondary">
                  <li class="mb-2">🟡 <strong>GUNANUSA, Business partner, Subcontractor and Vendor</strong> involved in the Execution of Project shall have same commitment in the implementation of the Quality Management System to achieve the best quality requirements.</li>
                  <li class="mb-2">🟡 Developing the <strong>Project Quality Management System with a risk-based approach</strong> where the efforts are focusing on the critical aspect of the organization process in giving assurance to our customer, starting from Detailed Engineering, Procurement, Construction, Installation, Pre-Commissioning, Commissioning up to the completion of the Project Contractual Scope of Work.</li>
                  <li>🟡 Each personnel directly or indirectly involved in the Project contributes to the implementation of <strong>Project Quality Management System</strong> (PEP, PQP, ITP, Procedures, etc) in their respective working area.</li>
                </ul>
              </div>

              <!-- Quality Objective -->
              <div class="mb-4">
                <h5 class="fw-semibold text-dark mb-3">📌 Project Quality Objective</h5>
                <p class="text-secondary">
                  The Project Quality Objective is achieving on time delivery within budget, conformity of processes/product and enhancement of COMPANY satisfaction.
                  <br>On time delivery means that the project shall achieve the dates as stated in the contract. 
                  <br><strong class="text-dark">Should actual planned progress slip by more than 4.5%</strong> against the late curve, then a recovery plan shall be implemented and issued to COMPANY for review and approval.
                </p>
              </div>

              <!-- Final Commitment -->
              <div class="bg-light rounded p-4 mb-4 border-start border-4 border-warning">
                <h6 class="fw-semibold text-dark mb-2">Our Commitment</h6>
                <p class="text-secondary mb-0">
                  We have commitment to produce products that exactly comply with client's requirements and specifications according to Internal and National Standard.
                </p>
              </div>

              <!-- Certification Section -->
              <div class="bg-white border rounded shadow-sm p-4">
                <h6 class="fw-semibold text-dark mb-3">📄 Certification</h6>
                <p class="text-secondary">
                  PT. Gunanusa Utama Fabricators implements <strong>Quality Management System (ISO 9001)</strong> since 10th December 1999 and has now established and applied the <strong>ISO 9001:2015 Quality Management System</strong> applicable to: Engineering, procurement, construction, and installation of industrial, oil and gas facilities for offshore and onshore, material handling units, pressure vessels and boilers.
                </p>
                <p class="text-secondary mb-0">
                  It is certified by <strong>Lloyd Register Quality Assurance (LRQA)</strong>. Approval Cert No: <strong>ISO 9001 - 0044954 (JKT0403218)</strong>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
