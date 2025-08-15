<!doctype html>
<html lang="en">
<head>
    @include('user.theme.css')
</head>
<body>
    <div class="body-wrapper">
        @include('User.theme.header')
        <div class="container py-5">
            <h2 class="fw-bold mb-4">My Cart</h2>

            @if(session('cart'))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Book</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $id => $item)
                            <tr>
                                <td>
                                    <img src="{{ $item['cover_image'] }}" width="50" class="img-thumbnail me-2"> {{ $item['title'] }}
                                </td>
                                <td class="text-success fw-semibold">${{ number_format($item['price'], 2) }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.remove', $id) }}">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center flex-wrap mt-4">
                    <a href="{{ url('/products') }}" class="btn btn-outline-primary">&#8592; Add More Books</a>

                    <div class="text-end">
                        <p class="mb-1"><strong>Subtotal:</strong> ${{ $subtotal }}</p>
                        <p class="mb-1"><strong>Tax (10%):</strong> ${{ $tax }}</p>
                        <p class="mb-2"><strong>Total:</strong> ${{ $total }}</p>
                        <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>
                    </div>
                </div>
            @else
                <div class="alert alert-warning mt-4">Your cart is empty.</div>
            @endif
        </div>
    </div>
    @include('user.theme.script')
</body>
</html>
    