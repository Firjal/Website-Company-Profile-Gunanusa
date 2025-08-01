{{-- resources/views/admin/awards/partials/form.blade.php --}}

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
