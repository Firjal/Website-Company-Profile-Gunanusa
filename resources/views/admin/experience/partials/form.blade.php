<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label fw-semibold">Client</label>
    <input type="text" name="client" class="form-control form-control-lg" 
           value="{{ old('client', $experience->client ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fw-semibold">Project Name</label>
    <input type="text" name="project_name" class="form-control form-control-lg" 
           value="{{ old('project_name', $experience->project_name ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fw-semibold">Location</label>
    <input type="text" name="location" class="form-control form-control-lg" 
           value="{{ old('location', $experience->location ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label fw-semibold">Project Duration</label>
    <input type="text" name="project_duration" class="form-control form-control-lg" 
           value="{{ old('project_duration', $experience->project_duration ?? '') }}" required>
  </div>

  <div class="col-12">
    <label class="form-label fw-semibold">Scope of Work</label>
    <textarea name="scope_of_work" rows="3" 
              class="form-control form-control-lg">{{ old('scope_of_work', $experience->scope_of_work ?? '') }}</textarea>
  </div>

  <div class="col-12">
    <label class="form-label fw-semibold">Description</label>
    <textarea name="description" rows="4" 
              class="form-control form-control-lg">{{ old('description', $experience->description ?? '') }}</textarea>
  </div>

  <div class="col-md-6">
    <label class="form-label fw-semibold">Image (Optional)</label>
    <input type="file" name="image" class="form-control form-control-lg">
    @if(!empty($experience?->image))
      <div class="mt-2">
        <img src="{{ asset('storage/' . $experience->image) }}" 
             class="img-thumbnail rounded-3 shadow-sm" style="width: 150px;">
      </div>
    @endif
  </div>
</div>
