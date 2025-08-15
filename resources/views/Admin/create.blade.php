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
    <h2>Add New Book</h2>

    <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="genre" class="form-select" required>
                <option value="Fiction">Fiction</option>
                <option value="Non-fiction">Non-fiction</option>
                <option value="Sci-Fi">Sci-Fi</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cover Image</label>
            <input type="file" name="cover_image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">PDF File</label>
            <input type="file" name="pdf_url" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
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










