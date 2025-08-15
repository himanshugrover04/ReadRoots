@include('user.theme.css')
@include('user.theme.header')
@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="container py-5 text-center">
    <h2>Thank You!</h2>
    <p>Your purchase was successful. Enjoy your books!</p>
    <a href="{{ url('/products') }}" class="btn btn-primary mt-3">Continue Shopping</a>
</div>

@include('user.theme.footer')
@include('user.theme.script')
