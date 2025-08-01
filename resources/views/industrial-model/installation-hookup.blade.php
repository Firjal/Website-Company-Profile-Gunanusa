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
                <span class="text-decoration-underline">Installation & Hook-up</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Installation & Hook-up</h3>

              <!-- Konten -->
              <p class="text-justify">
                Our experienced engineers is capable of performing on-site hook up and installation, supported by versatile marine spreads, equipment, tools, consumables, utilities and other resources required for site work.
              </p>
              <p class="text-justify">
                For shallow water installation, Gunanusa uses the fl oat over method. The barge, with full-loaded deck, is positioned above the site and lowered using high capacity ballast pumps and taking advantage of the local tide.
              </p>
              <p class="text-justify">
                For open sea installation, Gunanusa would employ third party qualifi ed offshore installation company.
              </p>
              <p class="text-justify">
                Through years of working at the customers’ premise, Gunanusa has become very a dept in the hook-up process. During these activities, the existing plant which is normaly located nearby need to be shut down to allow for safe connection and the testing of connections afterwards.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
