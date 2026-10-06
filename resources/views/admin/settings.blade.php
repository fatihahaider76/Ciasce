@extends('admin.layout')
@section('title', 'Settings')

@section('content')
  <h3 class="page-title mb-4"><i class="bi bi-gear"></i> Login Settings</h3>

  @unless ($tableReady)
    <div class="alert alert-warning">
      To change your login details, the <strong>admins</strong> database table must exist. Please create it first (SQL is provided in the setup instructions), then reload this page.
    </div>
  @endunless

  <div class="admin-card p-4" style="max-width:620px;">
    <p class="text-muted">Change the email and password you use to log in to the admin panel.</p>

    <form action="{{ route('admin.settings.update') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label class="form-label fw-semibold">Email (username)</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $email) }}" required @disabled(!$tableReady)>
      </div>

      <hr class="my-4">
      <p class="fw-semibold mb-3" style="color:#2d2a6e;">Change Password <span class="text-muted fw-normal">(leave blank to keep current)</span></p>

      <div class="mb-3">
        <label class="form-label fw-semibold">New Password</label>
        <input type="password" name="password" class="form-control" placeholder="At least 6 characters" @disabled(!$tableReady)>
      </div>
      <div class="mb-4">
        <label class="form-label fw-semibold">Confirm New Password</label>
        <input type="password" name="password_confirmation" class="form-control" @disabled(!$tableReady)>
      </div>

      <hr class="my-4">
      <div class="mb-4">
        <label class="form-label fw-semibold">Current Password <span class="text-danger">*</span></label>
        <input type="password" name="current_password" class="form-control" placeholder="Enter your current password to confirm" required @disabled(!$tableReady)>
      </div>

      <button type="submit" class="btn btn-primary" @disabled(!$tableReady)><i class="bi bi-check-lg"></i> Save Changes</button>
    </form>
  </div>
@endsection
