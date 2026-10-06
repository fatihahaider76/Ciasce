@extends('admin.layout')
@section('title', 'Programs')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
    <h3 class="page-title mb-0"><i class="bi bi-collection"></i> Our Programs</h3>
    <a href="{{ route('admin.programs.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Program</a>
  </div>

  <div class="admin-card p-0 overflow-hidden">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th style="width:90px">Image</th>
            <th>Heading</th>
            <th>Description</th>
            <th style="width:170px" class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($programs as $program)
            <tr>
              <td>
                @if ($program->image)
                  <img src="{{ asset($program->image) }}" alt="" style="width:64px;height:48px;object-fit:cover;border-radius:8px;">
                @else
                  <span class="text-muted"><i class="bi bi-image"></i></span>
                @endif
              </td>
              <td class="fw-semibold" style="color:#2d2a6e;">{{ $program->heading }}</td>
              <td class="text-muted" style="max-width:380px;">{{ \Illuminate\Support\Str::limit($program->description, 90) }}</td>
              <td class="text-end">
                <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i> Edit</a>
                <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Delete this program?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </form>
              </td>
            </tr>
          @empty
            <tr><td colspan="4" class="text-center text-muted py-5">No programs yet. Click <strong>Add Program</strong> to create one.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
