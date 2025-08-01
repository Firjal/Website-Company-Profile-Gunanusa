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

                <!-- Capabilities Section -->
                <h4 class="fw-bold text-dark mb-3">Capabilities</h4>
                <p class="mb-4 text-secondary">
                    In general, Fabrication Yard capabilities can be described as follows in <strong>man-hour unit per year</strong>:
                </p>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                    <thead class="table-warning text-dark">
                        <tr>
                        <th>Activity</th>
                        <th class="text-center">:</th>
                        <th>Man-Hour / Year</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                        <td>Piping</td>
                        <td class="text-center">:</td>
                        <td>566,000 Mhrs / Year</td>
                        </tr>
                        <tr>
                        <td>Pressure Vessel</td>
                        <td class="text-center">:</td>
                        <td>258,000 Mhrs / Year</td>
                        </tr>
                        <tr>
                        <td>Instrument</td>
                        <td class="text-center">:</td>
                        <td>100,000 Mhrs / Year</td>
                        </tr>
                        <tr>
                        <td>Electrical</td>
                        <td class="text-center">:</td>
                        <td>80,000 Mhrs / Year</td>
                        </tr>
                        <tr>
                        <td>Open Area</td>
                        <td class="text-center">:</td>
                        <td>4,415,000 Mhrs / Year</td>
                        </tr>
                        <tr class="fw-semibold text-primary">
                        <td>Total</td>
                        <td class="text-center">:</td>
                        <td><strong>5,419,000 Mhrs / Year</strong></td>
                        </tr>
                    </tbody>
                    </table>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
