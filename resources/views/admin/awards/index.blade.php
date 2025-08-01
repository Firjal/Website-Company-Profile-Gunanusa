@extends('layouts.admin', ['pageName' => 'Awards'])

@section('admin-content')
<div class="container-fluid">
  <div class="d-flex justify-content-end mb-4">
    <a href="{{ route('admin.awards.create') }}" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Add Award
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card shadow-sm border-0">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-bordered table-hover mb-0 align-middle">
          <thead class="table-light">
            <tr>
              <th>No.</th>
              <th style="width: 50%">Name</th>
              <th>Images</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($awards as $index => $award)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td style="width: 50%">{{ $award->name }}</td>
              <td style="min-width: 120px; max-width: 240px;">
                @if ($award->images->isNotEmpty())
                  <div class="d-flex flex-wrap gap-1">
                    @foreach($award->images as $img)
                      <div style="width: 80px; height: 80px; overflow: hidden; border-radius: 6px; border: 1px solid #ddd;">
                        <img src="{{ asset('storage/' . $img->image) }}"
                            alt="Award Image"
                            class="img-fluid h-100 w-100 object-fit-cover">
                      </div>
                    @endforeach
                  </div>
                @else
                  <span class="text-muted">No images</span>
                @endif
              </td>
              <td class="text-center">
                <div class="d-flex justify-content-center gap-1">
                  <a href="{{ route('admin.awards.edit', $award->id) }}"
                     class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1">
                    🖊 <span>Edit</span>
                  </a>
                  <form action="{{ route('admin.awards.destroy', $award->id) }}" method="POST"
                        onsubmit="return confirm('Delete this award?')">
                    @csrf @method('DELETE')
                    <button type="submit"
                            class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1">
                      🗑 <span>Delete</span>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            @if($awards->isEmpty())
              <tr><td colspan="4" class="text-center text-muted py-4">No awards available.</td></tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
