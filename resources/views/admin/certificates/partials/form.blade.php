<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label fw-semibold">Certificate Name</label>
    <input type="text" name="name" class="form-control form-control-lg" 
           value="{{ old('name', $certificate->name ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fw-semibold">Image (Optional)</label>
    <input type="file" name="image" class="form-control form-control-lg">
    
    @if(!empty($certificate?->image))
      <div class="mt-2">
        <img src="{{ asset('storage/' . $certificate->image) }}" 
             class="img-thumbnail rounded-3 shadow-sm" style="width: 150px;">
      </div>
    @endif
  </div>
</div>
