@extends('layouts.admin', ['pageName' => 'Edit Experience'])

@section('admin-content')
<div class="container">
  <div class="d-flex justify-content-end align-items-center mb-4">
    <a href="{{ route('admin.experience.index') }}" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Back to List
    </a>
  </div>

  <form method="POST" action="{{ route('admin.experience.update', $experience->id) }}" enctype="multipart/form-data" class="card shadow-sm border-0 rounded-4 p-4">
    @csrf
    @method('PUT')

    @include('admin.experience.partials.form', ['experience' => $experience])

    <div class="text-end mt-4">
      <button type="submit" class="btn btn-primary px-4">
        <i class="bi bi-save2 me-1"></i> Update
      </button>
    </div>
  </form>
</div>
@endsection
