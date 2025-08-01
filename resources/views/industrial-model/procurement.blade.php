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
                <span class="text-decoration-underline">Procurement</span>
              </nav>

              <!-- Judul -->
              <h3 class="fw-bold mb-3 text-dark">Procurement</h3>

              <!-- Konten -->
              <p class="text-justify">
                Gunanusa Procurement department ensures the timely delivery of materials and information between vendors and projects, including shipping arrangement, custom clearance, materials handling activities, local/inland transport and warehouse storage. Procurement engineering also provides technical backup for materials and equipment package to meet clients requirements and specifications.
              </p>
              <p class="text-justify">
                Gunanusa synchronizes its supply chain management by using its own Enterprise Resource Planning (ERP) software which coordinates and provides real-time information to monitor schedule, materials take-off, purchase requisitions and warehouse inventory.
              </p>
              <p class="text-justify">
                The construction engineering team at Gunanusa yard performs the preparation of fabrication and construction drawings which provide the base for fabrication work. They are also experienced in the design of pressure vessels and boilers, according to ASME and BS standards.To monitor the progress of overseas procurement, we use the services of the world wide inspection companies, such as Moody International (Asia), DNV, Lloyd Register to ensure that all the procured items meet project specifications.
              </p>
              <p class="text-justify">
                Gunanusa’s stellar reputation in the oil and gas fi eld is built by years of fabrication experience, delivering more than 100 offshore structures to customers in Indonesia and the rest of the world.
              </p>
              <p class="text-justify">
                Nearly all of the structures are built at Gunanusa own fabrication yard, located 120 km west of Jakarta. The yard occupies an area of 18 ha with an 800 m water front to accommodate two jetties, each with 8,000 and 10,000 ton load out capabilities, respectively.
              </p>
              <p class="text-justify">
                Every structure build at our fabrication yard is custom fabricated by dedicated engineers determined to do their best to fulfill customers needs and schedule.
              </p>
              <p class="text-justify">
                The Javanese tradition heritage in fine craftsmanship manifested in our platform building which conform to the highest international standards.The same skills and attention to details commonly found in Javanese craft and architecture are now applied to the fabrication of oil and gas platforms using modern materials like Duplex Stainless steel, Fiber-reinforced epoxies and other exotic modern materials.
              </p>
              <p class="text-justify">
                From material received to material identification, from shop drawing to structural works, from erection and assembly to commissioning our engineer and technician are working hard to ensure that we deliver in accordance with international standard and on the agreed schedule to our customers.
              </p>
              <p class="text-justify">
                Gunanusa yard is a fully equipped fabrication facility, with a proven track record of delivery of 25,000 tonnes of various modular fabricated structures and have had 6500 personels working at peak period.
              </p>
              <p class="text-justify">
                A dedicated workshop for welding of exotic materials like stainless steel, duplex, super duplex and CuNi complements the yard facilities along with assembly and erection areas, and a welding school (for training and certification).
              </p>
              <p class="text-justify">
                The yard has several heavy duty vehicles and equipment, 8 to 250 tonnes cranes (overhead, cherry picker, crawler), welding machines, air compressors, generators, trailers, forklift, winches, tools, etc.
              </p>
              <p><strong>Gunanusa Fabrication yard is a bonded zone</strong></p>
              <p class="text-justify">
                which allows oversea vendors to deliver materials directly to the yard and clear customs formalities therein
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
