<div class="position-sticky" style="top: 100px";>
  <div class="card shadow-sm border-0 ps-3">
    <div class="card-body ps-2">
      <h5 class="fw-bold mb-4 d-flex align-items-center">
        <span class="border-start border-4 border-warning pe-2 me-2" style="height: 1.5rem;"></span>
        Categories
      </h5>
      <ul class="list-unstyled ms-2">
        <li class="mb-2">
          <a href="{{ route('history') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('history') ? 'text-warning fw-semibold' : 'text-dark' }}">
            History
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('profile') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('profile') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Profile
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('organization') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('organization') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Organization
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('vision') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('vision') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Vision
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('policy') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('policy') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Policy
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('industrial-model.engineering') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('industrial-model') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Industrial Model
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

