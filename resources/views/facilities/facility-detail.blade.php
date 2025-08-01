@extends('layout')

@section('content')
  @include('components.header', ['headerTitle' => 'Facility Detail'])

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
          @include('components.facilities-sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <!-- Breadcrumb -->
            <nav class="mb-3 text-muted small">
                <a href="/yard-location" class="text-muted text-decoration-none">Facilities</a>
                &nbsp;&gt;&nbsp;
                <span class="text-decoration-underline">Facility Detail</span>
            </nav>

            <!-- Title -->
            <h2 class="fw-bold text-dark mb-4">Facilities Overview</h2>

            <!-- Section -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">General Description</h5>
                <p>
                    The fabrication yard has equipment and personnel necessary to received and store materials, to pre-fabricate, fabricate, erection, blast and paint to perform pre-commissioning and load-out offshore Platforms, Decks, Jackets, Modules, Steel Structures and Process Equipment for energy related and Industrial plant project.
                </p>
            </div>

            <!-- Office Facilities -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Office Facilities 🏢</h5>
                <p>
                    Two buildings with three levels each, with total area 3.800 m2 are available for fabrication yard main office and client representative office.
                    <br>
                    There are also offices located in various areas of the fabrication yard for fabrication, erection, assembly, maintenance, blasting, painting, warehouse and others.
                </p>
            </div>

            <!-- Fabrication Workshops -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Fabrication Workshops 🛠️</h5>
                <p>
                    There are several fabrication shops with total area + 12,500 SQM, complete with equipment to fabricate of pipe spools, assembly of pressure vessels, skid mounted process equipment, electrical and instrumentation.
                </p>
                <ul>
                    <li>Automatic pipe cutting / beveling machine</li>
                    <li>Automatic plate cutting / beveling machine</li>
                    <li>Overhead cranes</li>
                    <li>Abrasive cut-off machines</li>
                    <li>Overhead traveling cranes can run along and across the whole shop</li>
                    <li>Welding machines for welding up to 42-inch diameter spools</li>
                    <li>Various welding machines</li>
                    <li>Automatic plate cutting machines</li>
                    <li>3 units Rolling Machines up to 70 mm thickness and 3,000 mm width capacity</li>
                </ul>
            </div>

            <!-- Miscellaneous Shops -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Miscellaneous Shops 🧰</h5>
                <p>
                    One of miscellaneous shops which area of 2400 SQM for cutting and profil
                </p>
            </div>

            <!-- Warehouse Area -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Warehouse & Material Storage 📦</h5>
                <p>
                    There are 2 (two) covered warehouse which has on overall surface in the total area 2,012 SQM.
                    <br>
                    The Customs bonded steel material open storage is approx. 176,559 SQM and has able space for storage of both Client(s) and Contractors materials.
                </p>
            </div>

            <!-- Material Handling -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Material Handling 🚚</h5>
                <p>All workshops are equipped with various capacities of overhead traveling cranes. PTG has its own traveling cranes to support the construction activities in open areas, i.e.:</p>
                <ul>
                    <li>Crawler Crane</li>
                    <li>Rough Terrain Crane</li>
                    <li>Truck Mounted Boom Hoist</li>
                </ul>
            </div>

            <!-- Working Tables -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Working Tables 🛠️</h5>
                <p>
                    There are working tables that are generally to be used for the assembly of deck sections and pre-fabrication of beams and branches.
                </p>
            </div>

            <!-- Jetty -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Jetty 🚢</h5>
                <p>
                    There are 2 (two) jetties used for the load-out of structures and most of the offloading and loading of material. The jetty-1 has a bulkhead of 106m (length) x 15m (width) and a minimum water depth of (-) 7.5m from chart datum. The jetty-2 has a bulkhead of 80m (length) x 15m (width) and a minimum water depth of (-) 7m from the chart datum.
                </p>
                <p>
                    The jetties were designed for a distribution load of 500T/m for the 1st of 4m from the jetty tip, 400T/m for the 2nd of 4m, 350T/m for the 3rd of 5m, and 250T/m along the skidway.
                </p>
                <p>
                    The minimum water depth at the load-out jetty is (-) 7 up to (-) 7.5m from the chart datum and is at least this depth through natural channels leading to the open sea. There is no problem (obstructions, overhead clearance, bends, channel widths, or water depths) in bringing with it the structures from the fabrication yard.
                </p>
            </div>

            <!-- Load Out System -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Load Out System 🏗️</h5>
                <p>
                    The skidways were designed for the skidding load-out method with the skidway spacing of 12.19m/20m at jetty-1 and 15.2m at jetty-2. The bulkhead was built at the jetty tip to allow for loading/unloading activity with the capacity for bearing loads up to 25 Tons/m2.
                </p>
                <p>
                    The skidways are 1.2m (width) x 1.5m (depth) embedded, spaced at 12.19m & 20.00m (skid-way jetty-1) and 15.35m (skid-way jetty-2) center to center. The length of skid-way jetty-1 is 300m and 153m for jetty-2 and both jetties face the open sea. Along the skidways, there are electrical outlets for 380 V rectifier-welding machines and compressed air outlets.
                </p>
                <p>
                    The structure/modules can be fabricated in the skidway up to 100m in length and for weighing the structure up to 15.000Te.
                    <br>
                    Besides the skid-way system, the multi-wheel method and the lifting method are also possible to use for the load-out system at GUNANUSA Fabrication Yard.
                </p>
            </div>

            <!-- Blasting & Painting -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Blasting & Painting Area 🎨</h5>
                <p>
                    This area is mainly used for blasting and priming works, the final painting work is done wherever it is convenient. Equipment in this area consists of:
                </p>
                <ul>
                    <li>Air Compressors</li>
                    <li>Completed sets of blasting equipment</li>
                </ul>
                <p>The area of blasting & painting as the follows:</p>
                <ul>
                    <li>Manual blasting / Painting Open Area</li>
                    <li>Manual Blasting Indoor Area</li>
                </ul>
                <p>In addition, Clemco Post is available for use where required. Besides the above area, there is one Thermal Spray Aluminum (TSA) Coating area complete with equipment.</p>
            </div>

            <!-- Welding School -->`
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Welding School 🧪</h5>
                <p>
                    The welding school is available for training and examination of the ability of all the welders before working on the project so that the project could be finished with the best quality and on time schedule it is also a Welding facility for making PQR (Procedure Qualification Record) and WPS (Welding Procedure Specification).
                </p>
            </div>

            <!-- Power Supply -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Power Supply ⚡</h5>
                <p>
                    Power supply from PLN Power source and main powerhouse generator house. Fabrication Yard power is distributed from the main powerhouse underground distribution system to each powerhouse.
                    <br>
                    There are units Emergency Generators, which are available to supply power were required.
            </p>
            </div>

            <!-- Generator Area -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Generator Area 🔌</h5>
                <ul>
                    <li>Units generator sets</li>
                    <li>Paralleling & Switchgear</li>
                    <li>Fuel Storage Tank</li>
                </ul>
            </div>

            <!-- Yard Lighting System -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Yard Lighting System 💡</h5>
                <ul>
                    <li>18 M high tower with halogen lamps each</li>
                    <li>2 M high tower with halogen lamps each</li>
                    <li>1.5 M high Spot light</li>
                </ul>
            </div>

            <!-- Repair and Maintenance Area -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Repair and Maintenance Area 🛠️</h5>
                <p>
                    The area designated for repair and maintenance houses the machine shop, electrical shop, tire & body repair shop, and offices. The open area consists of wash & lubrication racks equipment repair & overhaul facilities and diesel fuel & gasoline storage facilities.
                </p>
                <p>In addition to the standard tools, the Machines shop is equipped with:</p>
                <ul>
                    <li>Long bed lathe</li>
                    <li>Vertical milling machine</li>
                    <li>Extra large vertical drill press</li>
                    <li>24 in power hack saw</li>
                </ul>
                <p>The electrical shop has the usual electrical maintenance tools.</p>
            </div>

            <!-- Security System -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Security System 🛡️</h5>
                <p>
                    PTG security is operated by a team of security guards and one Chief Security and allows for a 24-hour shift operation covering.
                    <br><br>
                    The yard area of some 176,559 SQM is protected from public access by a security brick wall and constructed of steel pipes with plastic covered wire mesh. There are unfenced boundaries, but these are secured by the seafront. Paint and Oxy acetylene bottles are sparely housed in a secure fenced area within the yard.
                </p>
                <p>
                    A 24-hour watch is maintained at the main gates. Access to the yard is gained only after the security officer has obtained signed authorization from management for each request to enter.
                </p>
            </div>

            <!-- Accommodations -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Accommodations 🛏️</h5>
                <p>
                    Rest area and accommodation room for employees with a capacity of approximately employees, equipped with locker space for employees. In addition, we also have a mess area that has several rooms and provides cover for the amenities of the kitchen, laundry, mess hall, video lounge, canteen client, and recreation rooms.
                </p>
            </div>

            <!-- Clinic and Ambulance -->
            <div class="bg-white rounded shadow-sm p-4 mb-4">
                <h5 class="fw-semibold text-warning mb-3">Clinic and Ambulance 🚑</h5>
                <p>
                    Clinics with doctors, paramedics, and ambulances are available at GUNANUSA Fabrication Yard for first aid in accidents during fabrication and construction with support from the nearest hospitals.
                </p>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
