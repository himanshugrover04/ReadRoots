@include('user.theme.css')
@include('user.theme.header')

<div class="container py-5">
    <h2>Checkout</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('checkout.process') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Cardholder Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="card_number" class="form-label">Card Number</label>
            <input type="text" class="form-control" id="card_number" name="card_number" maxlength="16" required>
        </div>

        <div class="mb-3">
            <label for="expiry" class="form-label">Expiry Date (MM/YY)</label>
            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/YY" required>
        </div>

        <div class="mb-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" maxlength="3" required>
        </div>

        <button type="submit" class="btn btn-success">Complete Purchase</button>
    </form>
</div>

@include('user.theme.footer')
@include('user.theme.script')
