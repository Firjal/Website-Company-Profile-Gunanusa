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
                <span class="text-decoration-underline">Profile</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Profile</h3>

              <!-- Konten -->
              <p class="text-justify">
                Gunanusa has built a reputation as a reliable and one of the leading heavy engineering and steel fabrication companies in Indonesia with an excellent track record for turnkey execution of oil & gas projects.
              </p>
              <p class="text-justify">
                Gunanusa's main fortep is in the fabrication of all kinds of oil & gas platforms. It's fabrication yard is ideally located at the western tip of the island of Java with a relatively calm water-front and a maximum low-to-high tidal variation of a mere 0.6m making it ideal for the load-out of long slender structures. The main yard has an area of 18 hectares and 800m water front equipped with two load-out jetties.
              </p>
              <p>
                <a href="https://www.gunanusautama.co.id/newsletter-pdf/Gunanusa-Brochure_Aug%202019.pdf" target="_blank">Gunanusa Brocure</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
