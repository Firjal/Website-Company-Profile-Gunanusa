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
                <span class="text-decoration-underline">Policy</span>
              </nav>

              <!-- Konten -->
              <div class="text-justify">
                <p><strong>HOME &gt;&gt; POLICY</strong></p>

                <p><strong>INTEGRATED POLICY:</strong><br>
                  PT Gunanusa Utama Fabricators is Committed for ensuring sustainability business and achievement customer satisfaction with our ability to continually improve the Quality of our services and products with competitive price and on time delivery while protecting people and the environment for ensuring human health, operational safety, environmental protection, quality enhancement, optimization local product, and community goodwill with doing business ethically whilst meeting stakeholders' expectations.
                  Company is also committed to understand, comply, and implement the entire provisions required by the Quality, Occupational Health, Safety, Security, Environment, and Anti-Bribery and Corruption Management Systems set by the company and stakeholders.
                  This commitment is in the best interests, expectations and satisfaction of our customers, our employees, our sub-contractors, our stockholders, and the communities in which we live and work.
                </p>

                <p><strong>HSSE POLICY:</strong><br>
                  GUNANUSA recognizes of protecting Health, Safety, Security and Environment in all its activities, at every level in the company and in every area in which it operates.
                  We understand that all workplace accidents, incidents, the importance occupational sickness, damage to properties, and pollution are preventable by promoting HSSE culture and programs to all employees and all stakeholders.
                  GUNANUSA committed to the Health, Safety, Security and Environment (HSSE) as the top priority and appoints HSSE Committee which oversees all HSSE matters.
                  We committed our responsibility to sustainable business development and our performance depends on our ability to continually improve the quality of the services, protects the health and safety, and minimizes adverse impacts on the environment.
                </p>

                <p><strong>To accomplish this, we will:</strong><br></p>
                <ul>
                  <li>Establish HSSE procedures that comply with all local and international applicable HSSE laws, regulations, and standard in the area where we operate.</li>
                  <li>Enforce and maintain HSSE Management System that meets the requirements and which is certified to standards ISO 14001, ISO 45001, and SMK3;</li>
                  <li>Conduct regular audits/assessment of legal compliance and progress of our HSSE activities to achieve continuous improvement in our HSSE performance.</li>
                  <li>Encourage all employees and stakeholder to identify and assess health, safety hazards, security and environmental impacts, with elimination or, if not possible, reduce of risks to as low as reasonably practicable to prevent incidents and impacts on the environment.</li>
                  <li>Perform appropriate HSSE training to develop and enhance the performance, awareness, competencies, and knowledge employees in HSSE to support their daily jobs and activities.</li>
                  <li>Maintain and regularly test emergency response plans to ensure a quick and effective response in the event of emergencies.</li>
                  <li>Provide resources (manpower, tools, equipment, facilities, PPE, etc) that will enable our employees to meet HSSE objectives and targets.</li>
                  <li>Require Sub-contractors to manage HSSE in accordance with this Policy, and to achieve agreed HSSE Objective.</li>
                  <li>Communicate this policy to our employees and stakeholder; and share our HSSE performance openly and transparently.</li>
                </ul>

                <p><strong>ANTI BRIBERRY AND CORRUPTION POLICY:</strong><br>
                  Board of Directors of PT. Gunanusa Utama Fabricators establishes a policy to run a Company that is free from bribery practices by implementing an Anti-Bribery and Corruption Management System (ABC-MS).
                </p>

                <p><strong>The Board of Directors is committed to:</strong><br></p>
                <ol>
                  <li>Establishing ABC-MS Objective, Procedures, Guidelines by complying with all Anti-Bribery and Corruption Laws, regulations that apply at the local and international level in the areas where we operate.</li>
                  <li>Implement the "zero tolerance" policy for all sorts of bribery and breaches of relevant regulations.</li>
                  <li>Enforce and maintain ABC-MS that meets the requirements and is certified with the ISO 37001:2016.</li>
                  <li>Establish the duties, responsibilities and authorities of the Anti-Bribery and Corruption Compliance Function in the GCG Team in accordance with the applicable Decree.</li>
                  <li>Establish, document, communicate and ensure Policies, Procedures, Anti-Bribery and Corruption Guidelines, and the Company's Code of Ethics to employees and other interested parties, but not limited to email blasts, intranet, contract/ purchase documents, training facilities, website information, Intranet, and other media.</li>
                  <li>Ensuring the availability of human resources, budget, training, and information technology support for the implementation of the Anti-Bribery and Corruption Management System.</li>
                  <li>Promote culture and raise awareness of Anti-Bribery and Corruption.</li>
                  <li>Prohibit bribery and determine the consequences in accordance with Company Regulations when violating the Anti-Bribery and Corruption Policy.</li>
                  <li>Provide a system for reporting indications of bribery (Whistle Blowing System) so that it can encourage awareness raising in good faith or on a reasonable basis without fear of retaliation.</li>
                  <li>Ensure confidentiality and protect reporters on suspicion of bribery.</li>
                  <li>Ensuring that each Department/ Work Unit evaluates and controls the risks of bribery and corruption.</li>
                  <li>Encouraging each Head of Department/Work Unit to prevent and detect acts of bribery and corruption that occur in their Department/ Work Unit.</li>
                  <li>Ensuring the implementation of the Internal Audit Integrated on the implementation of the Anti-Bribery and Corruption Management System.</li>
                  <li>Periodically review the effectiveness of the implementation of the Anti-Bribery and Corruption Management System for continuous improvement.</li>
                  <li>Ensuring that the Company's Anti-Bribery and Corruption Policy and strategy are aligned.</li>
                </ol>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
