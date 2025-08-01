<div class="position-sticky" style="top: 100px";>
  <div class="card shadow-sm border-0 ps-3">
    <div class="card-body ps-2">
      <h5 class="fw-bold mb-4 d-flex align-items-center">
        <span class="border-start border-4 border-warning pe-2 me-2" style="height: 1.5rem;"></span>
        Categories
      </h5>
      <ul class="list-unstyled ms-2">
        <li class="mb-2">
          <a href="{{ route('yard-location') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('yard-location') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Yard Location
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('facility-detail') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('facility-detail') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Facilities
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('labor') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('labor') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Labor
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('capabilities') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('capabilities') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Capabilities
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('constructions-engineering') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('constructions-engineering') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Constructions Engineering
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

