<div class="position-sticky" style="top: 100px";>
  <div class="card shadow-sm border-0 ps-3">
    <div class="card-body ps-2">
      <h5 class="fw-bold mb-4 d-flex align-items-center">
        <span class="border-start border-4 border-warning pe-2 me-2" style="height: 1.5rem;"></span>
        Categories
      </h5>
      <ul class="list-unstyled ms-2">
        <li class="mb-2">
          <a href="{{ route('current-project') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('current-project') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Current Project
          </a>
        </li>
        <li class="mb-2">
          <a href="{{ route('experiences') }}" 
            class="d-block text-decoration-none 
            {{ request()->is('experiences') ? 'text-warning fw-semibold' : 'text-dark' }}">
            Experiences
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

