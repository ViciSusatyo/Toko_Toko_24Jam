@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-body-secondary text-uppercase small fw-semibold mb-1">Account</p>
            <h1 class="h3 fw-bold mb-1">Profile</h1>
            <p class="text-muted mb-0">Manage your personal details, bio, and contact preferences.</p>
        </div>
    </div>

    <section class="row g-3">
        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center position-relative">
                    <div class="mx-auto mb-3" style="height: 120px; background: var(--cui-primary); opacity: .15;"></div>
                    <div class="avatar avatar-xxl mx-auto rounded-circle" style="margin-top: -72px;">
                        <img class="avatar-img rounded-circle" src="{{ asset('coreui/assets/img/avatars/1.jpg') }}" alt="{{ Auth::user()->name ?? 'Admin Hasan' }}">
                    </div>
                    <h2 class="h5 fw-bold mt-3 mb-1">{{ Auth::user()->name ?? 'Admin Hasan' }}</h2>
                    <p class="text-muted mb-3">Product Administrator</p>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge text-bg-primary">Admin</span>
                        <span class="badge text-bg-success">Verified</span>
                    </div>
                    <ul class="list-group list-group-flush text-start">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Email</span>
                            <strong class="text-end">{{ Auth::user()->email ?? 'admin@example.com' }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Department</span>
                            <strong>Product Ops</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Time Zone</span>
                            <strong>Asia/Jakarta</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <form class="card border-0 shadow-sm needs-validation" novalidate>
                <div class="card-header bg-transparent">
                    <h2 class="h5 mb-1 fw-semibold">Profile Settings</h2>
                    <p class="text-muted small mb-0">Update your account profile and contact details.</p>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="profileName">Name</label>
                            <input class="form-control" id="profileName" type="text" value="{{ Auth::user()->name ?? 'Admin Hasan' }}" required>
                            <div class="invalid-feedback">Name is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="profileEmail">Email</label>
                            <input class="form-control" id="profileEmail" type="email" value="{{ Auth::user()->email ?? 'admin@example.com' }}" required>
                            <div class="invalid-feedback">Enter a valid email.</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="profileBio">Bio</label>
                            <textarea class="form-control" id="profileBio" rows="5">Focused on clean admin workflows, reusable UI systems, and reliable operations.</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-primary" type="button"><i class="cil-check-circle me-1" aria-hidden="true"></i> Save Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection