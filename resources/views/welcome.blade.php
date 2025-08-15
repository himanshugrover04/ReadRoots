@extends('Admin.theme.css')


<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Welcome to ReadRoots Dashboard</h1>
        <p class="lead text-muted">Manage your bookstore operations quickly and efficiently.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <a href="{{ route('login') }}" class="text-decoration-none">
                <div class="btn btn-outline-success card border-0 shadow-lg text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-book" style="font-size: 3rem; color: #0d6efd;"></i>
                        <h5 class="mt-3">User Login</h5>
                        <p class="text-muted">User can Login and buy the books.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="{{ route('Adminlogin') }}" class="text-decoration-none">
                <div class="btn btn-outline-danger card border-0 shadow-lg text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-people" style="font-size: 3rem; color: #198754;"></i>
                        <h5 class="mt-3">Admin Login</h5>
                        <p class="text-muted">Admin can manage the books and users</p>
                    </div>
                </div>
            </a>
        </div>

        
    </div>
</div>

