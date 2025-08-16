@extends('Admin.theme.css')

<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .dashboard-bg {
        /* Replace with your preferred background image URL */
        background: url('/assets/images/dashboard-bg.jpg') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #fff;
    }

    .dashboard-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .dashboard-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    }

    .dashboard-card i {
        transition: transform 0.3s;
    }

    .dashboard-card:hover i {
        transform: scale(1.2);
    }

    .dashboard-overlay {
        background: rgba(0,0,0,0.6);
        padding: 50px;
        border-radius: 15px;
    }
</style>

<div class="dashboard-bg">
    <div class="dashboard-overlay text-center mb-5">
        <h1 class="display-4 fw-bold">Welcome to ReadRoots Dashboard</h1>
        <p class="lead text-light">Manage your bookstore operations quickly and efficiently.</p>

        <div class="row g-4 mt-5 justify-content-center">
            <div class="col-md-5">
                <a href="{{ route('login') }}" class="text-decoration-none">
                    <div class="dashboard-card card border-0 shadow-lg text-center h-100 bg-white text-dark p-4">
                        <div class="card-body">
                            <i class="bi bi-book" style="font-size: 3rem; color: #0d6efd;"></i>
                            <h5 class="mt-3 fw-bold">User Login</h5>
                            <p class="text-muted">User can login and buy books.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5">
                <a href="{{ route('Adminlogin') }}" class="text-decoration-none">
                    <div class="dashboard-card card border-0 shadow-lg text-center h-100 bg-white text-dark p-4">
                        <div class="card-body">
                            <i class="bi bi-people" style="font-size: 3rem; color: #198754;"></i>
                            <h5 class="mt-3 fw-bold">Admin Login</h5>
                            <p class="text-muted">Admin can manage books and users.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
