@extends('layouts.admin', ['pageName' => 'Edit Award'])

@section('admin-content')
<div class="container">
  <div class="d-flex justify-content-end align-items-center mb-4">
    <a href="{{ route('admin.awards.index') }}" class="btn btn-outline-secondary">
      Back to List
    </a>
  </div>

  {{-- Form utama update award --}}
  <form method="POST" action="{{ route('admin.awards.update', $award->id) }}" enctype="multipart/form-data"
        class="card shadow-sm border-0 rounded-4 p-4">
    @csrf
    @method('PUT')

    {{-- Award Name --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Award Name</label>
      <input type="text" name="name" class="form-control form-control-lg"
             value="{{ old('name', $award->name ?? '') }}" required>
    </div>

    {{-- Upload Images --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Upload Images</label>
      <input type="file" name="images[]" class="form-control form-control-lg" multiple>
    </div>

    {{-- Tombol submit --}}
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-primary px-4">
        Update
      </button>
    </div>
  </form>

  {{-- Existing images with individual delete forms --}}
  @if (!empty($award?->images))
    <div class="card shadow-sm border-0 rounded-4 p-4 mt-4">
      <div class="mb-3">
        <label class="form-label fw-semibold">Existing Images</label>
        <div class="d-flex flex-wrap gap-2">
          @foreach ($award->images as $img)
            <div class="position-relative border rounded p-1">
              <img src="{{ asset('storage/' . $img->image) }}" width="120" class="rounded shadow-sm">
              <form action="{{ route('admin.awards.image.delete', $img->id) }}"
                    method="POST"
                    onsubmit="return confirm('Delete this image?')"
                    class="position-absolute"
                    style="top: -8px; right: -8px;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger rounded-circle px-2 py-0">×</button>
              </form>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  @endif
</div>
@endsection
