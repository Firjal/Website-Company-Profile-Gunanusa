@extends('layouts.admin', ['pageName' => 'Edit Certificate'])

@section('admin-content')
<div class="container">
  <div class="d-flex justify-content-end align-items-center mb-4">
    <a href="{{ route('admin.certificates.index') }}" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Back to List
    </a>
  </div>

  <form method="POST" action="{{ route('admin.certificates.update', $certificate->id) }}" enctype="multipart/form-data" class="card shadow-sm border-0 rounded-4 p-4">
    @csrf
    @method('PUT')

    @include('admin.certificates.partials.form', ['certificate' => $certificate])

    <div class="text-end mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="bi bi-save2 me-1"></i> Update
      </button>
    </div>
  </form>
</div>
@endsection
