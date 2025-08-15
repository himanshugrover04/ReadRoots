<!doctype html>
<html lang="en">
<head>
    @include('user.theme.css')
</head>
<body>
    <div class="body-wrapper">
        @include('User.theme.header')
        <br>
        <div class="container-fluid">
            <div class="row">
                <!-- Book Info -->
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="card w-100 shadow p-4">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-4">
                                <h2 class="fw-bold display-6">{{ $book->title }}</h2>
                            </div>
                            <h5 class="text-muted mb-3">Welcome | {{ Session::get('user') }}</h5>
                            <div class="text-center mb-4">
                                <img src="{{ $book->cover_image }}" class="img-fluid rounded" style="max-height: 400px;" alt="Book Image">
                            </div>
                            <p><strong>Genre:</strong> <span class="badge bg-info text-dark">{{ $book->genre }}</span></p>
                            <form method="POST" action="{{ route('cart.add', $book->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary mt-3">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Details Sidebar -->
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 fw-semibold">Book Author</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-0">{{ $book->author }}</h6>
                                        </div>
                                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <img src="{{ url('assets/images/writer.png') }}" height="30" width="30" alt="Author Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 fw-semibold">Description</h5>
                                    <p class="text-muted">{{ $book->description }}</p>
                                    <div class="text-end">
                                        <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <img src="{{ url('/img/M.png') }}" height="30" width="30" alt="Description Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 fw-semibold">Price</h5>
                                    <h4 class="text-success">${{ number_format($book->price, 2) }}</h4>
                                    <div class="text-end">
                                        <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <img src="{{ url('/img/P.png') }}" height="30" width="30" alt="Price Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.theme.footer')
    @include('user.theme.script')
</body>
</html>
