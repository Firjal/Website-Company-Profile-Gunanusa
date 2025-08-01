@extends('layouts.admin', ['pageName' => 'Add Certificate'])

@section('admin-content')
<div class="container">
  <div class="d-flex justify-content-end align-items-center mb-4">
    <a href="{{ route('admin.certificates.index') }}" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Back to List
    </a>
  </div>

  <form method="POST" action="{{ route('admin.certificates.store') }}" enctype="multipart/form-data" class="card shadow-sm border-0 rounded-4 p-4">
    @csrf

    @include('admin.certificates.partials.form', ['certificate' => null])

    <div class="text-end mt-4">
      <button type="submit" class="btn btn-success px-4">
        <i class="bi bi-save me-1"></i> Save
      </button>
    </div>
  </form>
</div>
@endsection
