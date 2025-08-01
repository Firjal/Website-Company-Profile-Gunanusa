<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">
      <img src="{{ asset('images/logo-gunanusa.png') }}" alt="Logo" width="200" class="d-inline-block align-text-top">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-flex gap-4 fw-medium">

        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link link-hover {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>

        <!-- About -->
        <li class="nav-item dropdown dropdown-hover position-relative">
          <a class="nav-link link-hover d-flex align-items-center gap-1 {{ request()->is('history') || request()->is('profile') || request()->is('organization') || request()->is('vision') || request()->is('policy') || request()->is('industrial-model') ? 'active' : '' }}"
            href="/history" id="aboutDropdown" role="button">
            About <i class="bi bi-chevron-down small dropdown-icon"></i>
          </a>
          <ul class="dropdown-menu custom-dropdown shadow" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item" href="/history">History</a></li>
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><a class="dropdown-item" href="/organization">Organization</a></li>
            <li><a class="dropdown-item" href="/vision">Vision</a></li>
            <li><a class="dropdown-item" href="/policy">Policy</a></li>
            <li><a class="dropdown-item" href="/industrial-model">Industrial Model</a></li>
          </ul>
        </li>

        <!-- Services -->
        <li class="nav-item dropdown dropdown-hover position-relative">
          <a class="nav-link link-hover d-flex align-items-center gap-1 {{ request()->is('current-project') || request()->is('experience') ? 'active' : '' }}"
             href="/current-project" id="servicesDropdown" role="button">
            Services <i class="bi bi-chevron-down small dropdown-icon"></i>
          </a>
          <ul class="dropdown-menu custom-dropdown shadow" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="/current-project">Current Project</a></li>
            <li><a class="dropdown-item" href="/experiences">Experiences</a></li>
          </ul>
        </li>

        <!-- Facilities -->
        <li class="nav-item dropdown dropdown-hover position-relative">
          <a class="nav-link link-hover d-flex align-items-center gap-1 {{ request()->is('yard-location') || request()->is('facility-detail') || request()->is('labor') || request()->is('capabilities') || request()->is('constructions-engineering') ? 'active' : '' }}"
             href="/yard-location" id="facilitiesDropdown" role="button">
            Facilities <i class="bi bi-chevron-down small dropdown-icon"></i>
          </a>
          <ul class="dropdown-menu custom-dropdown shadow" aria-labelledby="facilitiesDropdown">
            <li><a class="dropdown-item" href="/yard-location">Yard Location</a></li>
            <li><a class="dropdown-item" href="/facility-detail">Facilities</a></li>
            <li><a class="dropdown-item" href="/labor">Labor</a></li>
            <li><a class="dropdown-item" href="/capabilities">Capabilities</a></li>
            <li><a class="dropdown-item" href="/constructions-engineering">Constructions Engineering</a></li>
          </ul>
        </li>

        <!-- Our Values -->
        <li class="nav-item dropdown dropdown-hover position-relative">
          <a class="nav-link link-hover d-flex align-items-center gap-1 {{ request()->is('safety') || request()->is('quality') || request()->is('certificate') || request()->is('awards') ? 'active' : '' }}"
             href="/safety" id="valuesDropdown" role="button">
            Our Values <i class="bi bi-chevron-down small dropdown-icon"></i>
          </a>
          <ul class="dropdown-menu custom-dropdown shadow" aria-labelledby="valuesDropdown">
            <li><a class="dropdown-item" href="/safety">Safety</a></li>
            <li><a class="dropdown-item" href="/quality">Quality</a></li>
            <li><a class="dropdown-item" href="/certificate">Certificate</a></li>
            <li><a class="dropdown-item" href="/awards">Awards</a></li>
          </ul>
        </li>

        <!-- Contact -->
        <li class="nav-item">
          <a class="nav-link link-hover {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
