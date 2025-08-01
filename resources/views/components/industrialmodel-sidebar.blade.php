<div class="position-sticky" style="top: 100px";>
  <div class="card shadow-sm border-0 ps-3">
    <div class="card-body ps-2">
      <h5 class="fw-bold mb-4 d-flex align-items-center">
        <span class="border-start border-4 border-warning pe-2 me-2" style="height: 1.5rem;"></span>
        Categories
      </h5>
      <ul class="list-unstyled ms-2">
        <li class="mb-2">
          <a href="{{ route('industrial-model.engineering') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model/engineering') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Engineering
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('industrial-model.procurement') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model/procurement') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Procurement
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('industrial-model.construction') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model/construction') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Construction
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('industrial-model.installation-hookup') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model/installation-hookup') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Installation & Hook-Up
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('industrial-model.commissioning') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model/commissioning') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Commissioning
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

