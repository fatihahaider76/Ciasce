@extends('admin.layout')
@section('title', 'Registrations')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
    <h3 class="page-title mb-0"><i class="bi bi-people"></i> Registrations
      <span class="badge bg-primary ms-2" style="font-size:0.8rem;">{{ $registrations->count() }}</span>
    </h3>
  </div>

  <div class="admin-card p-0 overflow-hidden">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th style="width:60px">Photo</th>
            <th>Form No.</th>
            <th>Full Name</th>
            <th>Certification</th>
            <th>Phone</th>
            <th>Date</th>
            <th class="text-end" style="width:150px">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($registrations as $r)
            <tr>
              <td>
                @if ($r->photo)
                  <img src="{{ asset($r->photo) }}" alt="" style="width:44px;height:44px;object-fit:cover;border-radius:50%;">
                @else
                  <span class="text-muted"><i class="bi bi-person-circle" style="font-size:1.6rem;"></i></span>
                @endif
              </td>
              <td class="text-muted small">{{ $r->form_number }}</td>
              <td class="fw-semibold" style="color:#2d2a6e;">{{ $r->full_name }}</td>
              <td class="text-muted">{{ $r->certification_name ?: '—' }}</td>
              <td class="text-muted">{{ $r->phone ?: '—' }}</td>
              <td class="text-muted small">{{ $r->created_at?->format('d M Y') }}</td>
              <td class="text-end">
                <a href="{{ route('admin.registrations.show', $r) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> View</a>
                <form action="{{ route('admin.registrations.destroy', $r) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this registration?');">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </form>
              </td>
            </tr>
          @empty
            <tr><td colspan="7" class="text-center text-muted py-5">No registrations yet.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
