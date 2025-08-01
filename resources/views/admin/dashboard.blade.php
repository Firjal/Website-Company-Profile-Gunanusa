@extends('layouts.admin', ['pageName' => 'Dashboard'])

@section('admin-content')
<div class="row g-4">
  <div class="col-md-4">
    <div class="card card-stats border-0 shadow-sm" style="cursor: pointer">
      <div class="card-body d-flex align-items-center">
        <div class="bg-warning-subtle text-warning rounded-circle p-3 me-3">
          <i class="fas fa-briefcase fa-lg"></i>
        </div>
        <div>
          <h6 class="mb-0">Projects</h6>
          <h4 class="fw-bold">{{ $projectCount }}</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-stats border-0 shadow-sm" style="cursor: pointer">
      <div class="card-body d-flex align-items-center">
        <div class="bg-info-subtle text-info rounded-circle p-3 me-3">
          <i class="fas fa-certificate fa-lg"></i>
        </div>
        <div>
          <h6 class="mb-0">Certificates</h6>
          <h4 class="fw-bold">{{ $certificateCount }}</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-stats border-0 shadow-sm" style="cursor: pointer">
      <div class="card-body d-flex align-items-center">
        <div class="bg-success-subtle text-success rounded-circle p-3 me-3">
          <i class="fas fa-award fa-lg"></i>
        </div>
        <div>
          <h6 class="mb-0">Awards</h6>
          <h4 class="fw-bold">{{ $awardCount }}</h4>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
