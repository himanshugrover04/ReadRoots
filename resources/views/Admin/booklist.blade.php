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
                <div class="row w-100"><form method="GET" class="mb-4">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="genre" class="col-form-label">Filter by Genre:</label>
        </div>
        <div class="col-auto">
            <select name="genre" id="genre" class="form-select" onchange="this.form.submit()">
                <option value="all" {{ request('genre') == 'all' ? 'selected' : '' }}>All Genres</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre }}" {{ request('genre') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
                @endforeach
            </select>
        </div>
    </div>
</form>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
                                <h4 class="card-title">Books Management</h4>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Genre</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($books as $book)
                                            <tr>
                                                <td>{{ $book->id }}</td>
                                                <td>{{ $book->title }}</td>
                                                <td>{{ $book->author }}</td>
                                                <td>{{ $book->genre }}</td>
                                                <td>${{ number_format($book->price, 2) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                                    <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display:inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
    @include('Admin.theme.script')
</body>

</html>
