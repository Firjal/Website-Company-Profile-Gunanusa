@extends('layouts.admin', ['pageName' => 'Certificates'])

@section('admin-content')
<div class="d-flex justify-content-end align-items-center mb-4">
  <a href="{{ route('admin.certificates.create') }}" class="btn btn-primary">
    <i class="bi bi-plus-lg me-1"></i> Add Certificate
  </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-bordered table-hover mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Images</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($certificates as $certificate)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $certificate->name }}</td>
              <td>
                @if ($certificate->image)
                  <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate Image" width="80">
                @else
                  <span class="text-muted">No image</span>
                @endif
              </td>
              <td class="text-center">
                <div class="d-flex justify-content-center gap-1">
                  <a href="{{ route('admin.certificates.edit', $certificate->id) }}"
                    class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1"
                    title="Edit">
                    🖊 <span>Edit</span>
                  </a>

                  <form action="{{ route('admin.certificates.destroy', $certificate->id) }}" method="POST"
                        onsubmit="return confirm('Delete this certificate?')">
                    @csrf @method('DELETE')
                    <button type="submit"
                            class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1"
                            title="Delete">
                      🗑 <span>Delete</span>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4" class="text-center text-muted">No certificates found.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
