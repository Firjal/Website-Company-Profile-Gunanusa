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
                <span class="text-decoration-underline">History</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">History</h3>

              <!-- Konten -->
              <p class="text-justify">
                PT Gunanusa Utama Fabricators (Gunanusa) was founded by Mr. Iman Taufik in 1980. In September 1983 the company secured its first offshore platform Engineering and Fabrication contract for two Production Facilities topsides which were later installed in the Cinta Natomas field in the Java sea.
              </p>
              <p class="text-justify">
                Today, after more than 20 years of successful operations, Gunanusa is renowned as one of the leading offshore oil & gas fabrication companies in the ASEAN region and the only company of its kind established and developed by Indonesian Nationals. The company's excellent track record includes turnkey projects in oil & gas particularly for offshore platforms for some of the world's famous oil companies like Total, British Petroleum, Pertamina, Chevron, ConocoPhilips, YPF Maxus, PTTEP, Hess, and ONGC.
              </p>
              <p class="text-justify">
                Gunanusa has executed more than 100 contracts since its inception. Most recently, in December 2006, the company delivered two sets of platforms for BP's Tangguh field offshore Papua, Indonesia with a design life of 40 years; which meant that the structures had to be fabricated with extra long-term corrosion protection which is posed many difficult and new challenges for offshore platform fabrication not commonly faced by fabricators anywhere. The Company's success was achieved through unrelenting efforts by the management team that has enabled the company to obtain the ISO9001 certification from Lloyds Register in 1999 and a number of safety achievement awards. Most of the projects were executed without any Loss-time Accidents (LTA) and the best safety record achieved by the company was recorded in June 2006 with 20 million man-hours without LTA.
              </p>
              <p class="text-justify">
                Amongst the projects undertaken by Gunanusa to date include 24 Production Modules, 35 drilling platforms and not less than 24 jackets.
              </p>
              <p class="text-justify">
                In keeping with its commitment to contribute towards the country's efforts in developing the local industry, Gunanusa is an active member of the Indonesian business and industrial community and participates actively in the Indonesian Chamber of Commerce and Industry (KADIN), Association of EPC Contractors (GAPENRI), Association of General Contractors (GAPENSI), Federation of Machinery and Metal Working Associations (GAMMA) and Indonesian Shipbuilding Association (IPERINDO).
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
