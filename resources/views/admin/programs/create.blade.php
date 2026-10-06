@extends('admin.layout')
@section('title', 'Add Program')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h3 class="page-title mb-0"><i class="bi bi-plus-circle"></i> Add Program</h3>
    <a href="{{ route('admin.programs.index') }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
  </div>

  <div class="admin-card p-4" style="max-width:720px;">
    <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold">Heading</label>
        <input type="text" name="heading" class="form-control" value="{{ old('heading') }}" placeholder="e.g. Management Training" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Description</label>
        <textarea name="description" class="form-control" rows="5" placeholder="Write the program details..." required>{{ old('description') }}</textarea>
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold">Image <span class="text-muted fw-normal">(optional, JPG/PNG, max 4MB)</span></label>
        <input type="file" name="image" class="form-control" accept="image/*">
      </div>

      <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Save Program</button>
      <a href="{{ route('admin.programs.index') }}" class="btn btn-light">Cancel</a>
    </form>
  </div>
@endsection
