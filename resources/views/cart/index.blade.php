<h2>My Cart</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Book</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cart as $id => $item)
        <tr>
            <td>{{ $item['title'] }}</td>
            <td>${{ number_format($item['price'], 2) }}</td>
            <td>
                <form method="POST" action="{{ route('cart.update', $id) }}">
                    @csrf
                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 50px;">
                    <button type="submit">Update</button>
                </form>
            </td>
            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
            <td>
                <form method="POST" action="{{ route('cart.remove', $id) }}">
                    @csrf
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<p><strong>Subtotal:</strong> ${{ number_format($subtotal, 2) }}</p>
<p><strong>Tax (13%):</strong> ${{ number_format($tax, 2) }}</p>
<p><strong>Total:</strong> ${{ number_format($total, 2) }}</p>

<a href="{{ route('books') }}">← Back to Books</a>
