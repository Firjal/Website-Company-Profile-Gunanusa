@extends('layouts.admin', ['pageName' => 'Experience'])

@section('admin-content')
<div class="container-fluid">
  <div class="d-flex justify-content-end mb-4">
    <a href="{{ route('admin.experience.create') }}" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Add Experience
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card shadow-sm border-0">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>No.</th>
              <th>Client</th>
              <th>Project</th>
              <th>Location</th>
              <th>Scope of Work</th>
              <th>Duration</th>
              <th>Image</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($experiences as $index => $exp)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $exp->client }}</td>
              <td>{{ $exp->project_name }}</td>
              <td>{{ $exp->location }}</td>
              <td>{{ Str::limit($exp->scope_of_work, 50) }}</td>
              <td>{{ $exp->project_duration }}</td>
              <td>
                @if($exp->image)
                  <img src="{{ asset('storage/' . $exp->image) }}" width="80">
                @else
                  <span class="text-muted">No images</span>
                @endif
              <td class="text-center">
                <div class="d-flex justify-content-center gap-1">
                  <a href="{{ route('admin.experience.edit', $exp->id) }}"
                    class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1"
                    title="Edit">
                    🖊 <span>Edit</span>
                  </a>

                  <form action="{{ route('admin.experience.destroy', $exp->id) }}" method="POST"
                        onsubmit="return confirm('Delete this experience?')">
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
              <td colspan="9" class="text-center text-muted py-4">No experiences available.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
