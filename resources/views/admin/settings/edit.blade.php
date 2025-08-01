@extends('layouts.admin', ['pageName' => 'Settings'])

@section('admin-content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8" data-aos="fade-up">

      <div class="d-flex justify-content-end align-items-center mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
          Back
        </a>
      </div>

      <div class="card shadow-sm border-0">
        <div class="card-body p-4">
          <h5 class="mb-4">Admin Settings</h5>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" value="{{ old('name', $admin->name) }}" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" value="{{ old('email', $admin->email) }}" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>New Password (optional)</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="mb-3">
              <label>Confirm New Password</label>
              <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
