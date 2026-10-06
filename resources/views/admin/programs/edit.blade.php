@extends('admin.layout')
@section('title', 'Edit Program')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h3 class="page-title mb-0"><i class="bi bi-pencil-square"></i> Edit Program</h3>
    <a href="{{ route('admin.programs.index') }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
  </div>

  <div class="admin-card p-4" style="max-width:720px;">
    <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label fw-semibold">Heading</label>
        <input type="text" name="heading" class="form-control" value="{{ old('heading', $program->heading) }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Description</label>
        <textarea name="description" class="form-control" rows="5" required>{{ old('description', $program->description) }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Current Image</label>
        <div>
          @if ($program->image)
            <img src="{{ asset($program->image) }}" alt="" style="width:120px;height:90px;object-fit:cover;border-radius:10px;border:1px solid #eee;">
          @else
            <span class="text-muted">No image uploaded.</span>
          @endif
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold">Change Image <span class="text-muted fw-normal">(optional — leave empty to keep current)</span></label>
        <input type="file" name="image" class="form-control" accept="image/*">
      </div>

      <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Update Program</button>
      <a href="{{ route('admin.programs.index') }}" class="btn btn-light">Cancel</a>
    </form>
  </div>
@endsection
