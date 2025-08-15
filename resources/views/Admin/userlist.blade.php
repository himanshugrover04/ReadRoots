<div class="container-fluid">
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
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h2>User Management</h2>
                                    </div>

                                    <table class="table table-bordered table-hover">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Books Purchased</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->books->count() }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                                            class="btn btn-sm btn-warning">Edit</a>
                                                        <form action="{{ route('admin.users.destroy', $user->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf @method('DELETE')
                                                            <button class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Delete user?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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