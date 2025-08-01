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
                <span class="text-decoration-underline">Vision</span>
              </nav>

              <!-- Konten -->
              <div class="text-justify">
                <p><strong>HOME &gt;&gt; VISION MISSION & SHARED VALUES</strong></p>

                <p><strong>VISION</strong><br>
                  To be a Preferred Global Partner for Engineering, Procurement, Construction, Installation & Commissioning (EPCIC) in Oil & Gas, Infrastructure, Pipe Manufacture and Other Related Industries.
                </p>

                <p><strong>MISSION</strong></p>
                <ul>
                  <li>We are a sustainable business entity with core business in Engineering, Procurement, Construction, Installation & Commissioning (EPCIC) of Oil & Gas Facilities, Infrastructure, Pipe Manufacture, and other related industries.</li>
                  <li>We promote the highest standards of Ethics, Quality, Health, Safety, Security, Environment, and Reliability on time delivery and execution within budget as the highest value in our operation.</li>
                  <li>We enhance shareholder and stakeholder value.</li>
                  <li>We support government policies wherever our project operates to optimize using local domestic products and develop the skill, competency, and performance of local workforce.</li>
                </ul>

                <p class="mb-1 fw-bold text-decoration-underline">SHARED VALUES</p>
                <p class="mb-4 fw-bold">(GUNANUSA B.I.S.A)</p>

                <div class="table-responsive">
                  <table class="table table-borderless align-middle">
                    <tbody>
                      <tr>
                        <td class="text-nowrap">
                          <span class="text-warning fw-bold">B</span>e Professional
                        </td>
                        <td class="text-nowrap">:</td>
                        <td>
                          Observe good work ethics whilst maintaining mutual respect and commitment in the performance of our duties.
                        </td>
                      </tr>
                      <tr>
                        <td class="text-nowrap">
                          <span class="text-warning fw-bold">I</span>ntegrity
                        </td>
                        <td>:</td>
                        <td>
                          Honest and morally upright.
                        </td>
                      </tr>
                      <tr>
                        <td class="text-nowrap">
                          <span class="text-warning fw-bold">S</span>ynergy
                        </td>
                        <td>:</td>
                        <td>
                          Work as a team to produce the best quality product in efficient manner..
                        </td>
                      </tr>
                      <tr>
                        <td class="text-nowrap">
                          <span class="text-warning fw-bold">A</span>bility
                        </td>
                        <td>:</td>
                        <td>
                          Competent in the field we operate..
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
