<!doctype html>
<html lang="en">

<head>
    @include('Admin.theme.css')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('Admin.theme.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid w-100">
                <!--  Row 1 -->
                <div class="row w-100">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Books Management</h4>

                                <div class="container-fluid">
                                    <h2>Edit User</h2>

                                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" value="{{ $user->first_name }}"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" value="{{ $user->last_name }}"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}"
                                                class="form-control" required>
                                        </div>

                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('Admin.theme.script')
</body>

</html>