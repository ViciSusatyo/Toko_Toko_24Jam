@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<style>
.avatar-img { width: 1.5rem !important; height: 1.5rem !important; }
</style>
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-body-secondary text-uppercase small fw-semibold mb-1">Overview</p>
            <h1 class="h3 fw-bold mb-1">Dashboard</h1>
            <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="cil-arrow-thick-to-bottom me-1" aria-hidden="true"></i> Export</button>
            <button class="btn btn-primary btn-sm" type="button"><i class="cil-file me-1" aria-hidden="true"></i> Create Report</button>
        </div>
    </div>

    <section class="row g-3" aria-label="Dashboard metrics">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="card text-bg-primary mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-medium">Revenue</span>
                        <i class="cil-basket" aria-hidden="true"></i>
                    </div>
                    <div class="fs-1 fw-semibold">$48,240</div>
                    <small class="opacity-75"><span class="fw-semibold">+12.5%</span> from last month</small>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="card text-bg-success mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-medium">Orders</span>
                        <i class="cil-cart" aria-hidden="true"></i>
                    </div>
                    <div class="fs-1 fw-semibold">1,284</div>
                    <small class="opacity-75"><span class="fw-semibold">+8.2%</span> new orders</small>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="card text-bg-warning mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-medium">Customers</span>
                        <i class="cil-people" aria-hidden="true"></i>
                    </div>
                    <div class="fs-1 fw-semibold">8,742</div>
                    <small class="opacity-75"><span class="fw-semibold">+5.1%</span> active users</small>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="card text-bg-danger mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-medium">Tickets</span>
                        <i class="cil-life-ring" aria-hidden="true"></i>
                    </div>
                    <div class="fs-1 fw-semibold">36</div>
                    <small class="opacity-75"><span class="fw-semibold">3 urgent</span> need review</small>
                </div>
            </article>
        </div>
    </section>

    <section class="row g-3 mt-1">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h5 mb-1 fw-semibold">Sales Performance</h2>
                        <p class="text-muted small mb-0">Monthly revenue compared with operational targets.</p>
                    </div>
                    <a class="btn btn-light btn-sm" href="#">View Details</a>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-around gap-3" style="height: 220px" aria-label="Sales performance chart">
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 42%;"></div>
                            <small class="text-body-secondary mt-2">Jan</small>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 58%;"></div>
                            <small class="text-body-secondary mt-2">Feb</small>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 51%;"></div>
                            <small class="text-body-secondary mt-2">Mar</small>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 72%;"></div>
                            <small class="text-body-secondary mt-2">Apr</small>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 66%;"></div>
                            <small class="text-body-secondary mt-2">May</small>
                        </div>
                        <div class="d-flex flex-column justify-content-end align-items-center flex-grow-1 h-100">
                            <div class="w-100 bg-info rounded-top" style="height: 83%;"></div>
                            <small class="text-body-secondary mt-2">Jun</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent">
                    <h2 class="h5 mb-1 fw-semibold">Team Activity</h2>
                    <p class="text-muted small mb-0">Recent operational updates.</p>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex gap-3 align-items-start px-0">
                            <span class="mt-2" style="width: 10px; height: 10px; border-radius: 50%; background: var(--cui-primary); flex-shrink: 0;"></span>
                            <div>
                                <p class="mb-1 fw-semibold">New campaign launched</p>
                                <p class="text-muted small mb-0">Marketing team published the May offer.</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex gap-3 align-items-start px-0">
                            <span class="mt-2" style="width: 10px; height: 10px; border-radius: 50%; background: var(--cui-success); flex-shrink: 0;"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Payment batch cleared</p>
                                <p class="text-muted small mb-0">246 invoices were processed successfully.</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex gap-3 align-items-start px-0">
                            <span class="mt-2" style="width: 10px; height: 10px; border-radius: 50%; background: var(--cui-warning); flex-shrink: 0;"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Support queue rising</p>
                                <p class="text-muted small mb-0">Average first response time is 18 minutes.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="card border-0 shadow-sm mt-3">
        <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
            <div>
                <h2 class="h5 mb-1 fw-semibold">Recent Users</h2>
                <p class="text-muted small mb-0">Latest account activity across the workspace.</p>
            </div>
            <a class="btn btn-outline-secondary btn-sm" href="#">Manage Users</a>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Role</th>
                        <th scope="col">Team</th>
                        <th scope="col">Status</th>
                        <th scope="col">Joined</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" style="width: 1.5rem; height: 1.5rem;" src="{{ asset('coreui/assets/img/avatars/1.jpg') }}" alt="Budi Santoso">
                                <div>
                                    <p class="fw-semibold mb-0">Budi Santoso</p>
                                    <p class="text-muted small mb-0">budi.santoso@toko.local</p>
                                </div>
                            </div>
                        </td>
                        <td>Kasir</td>
                        <td>Kasir</td>
                        <td><span class="badge text-bg-success">Aktif</span></td>
                        <td>15 Sep 2026</td>
                        <td class="text-end"><a class="btn btn-light btn-sm" href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{ asset('coreui/assets/img/avatars/8.jpg') }}" alt="Siti Rahayu">
                                <div>
                                    <p class="fw-semibold mb-0">Siti Rahayu</p>
                                    <p class="text-muted small mb-0">siti.rahayu@toko.local</p>
                                </div>
                            </div>
                        </td>
                        <td>Gudang</td>
                        <td>Gudang</td>
                        <td><span class="badge text-bg-success">Aktif</span></td>
                        <td>12 Sep 2026</td>
                        <td class="text-end"><a class="btn btn-light btn-sm" href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{ asset('coreui/assets/img/avatars/3.jpg') }}" alt="Ahmad Wijaya">
                                <div>
                                    <p class="fw-semibold mb-0">Ahmad Wijaya</p>
                                    <p class="text-muted small mb-0">ahmad.w@toko.local</p>
                                </div>
                            </div>
                        </td>
                        <td>Admin</td>
                        <td>Manajemen</td>
                        <td><span class="badge text-bg-warning">Menunggu</span></td>
                        <td>10 Sep 2026</td>
                        <td class="text-end"><a class="btn btn-light btn-sm" href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{ asset('coreui/assets/img/avatars/4.jpg') }}" alt="Dewi Lestari">
                                <div>
                                    <p class="fw-semibold mb-0">Dewi Lestari</p>
                                    <p class="text-muted small mb-0">dewi.lestari@toko.local</p>
                                </div>
                            </div>
                        </td>
                        <td>Kasir</td>
                        <td>Kasir</td>
                        <td><span class="badge text-bg-secondary">Nonaktif</span></td>
                        <td>08 Sep 2026</td>
                        <td class="text-end"><a class="btn btn-light btn-sm" href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{ asset('coreui/assets/img/avatars/7.jpg') }}" alt="Rizki Maulana">
                                <div>
                                    <p class="fw-semibold mb-0">Rizki Maulana</p>
                                    <p class="text-muted small mb-0">rizki.m@toko.local</p>
                                </div>
                            </div>
                        </td>
                        <td>Supervisor</td>
                        <td>Operasional</td>
                        <td><span class="badge text-bg-success">Aktif</span></td>
                        <td>05 Sep 2026</td>
                        <td class="text-end"><a class="btn btn-light btn-sm" href="#">Lihat</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection