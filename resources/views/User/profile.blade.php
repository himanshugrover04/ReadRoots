@include('user.theme.css')
@include('user.theme.header')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-4">
                <div class="text-center mb-4">
                    {{-- Circle avatar --}}
                    <img src="{{ asset('/assets/images/avatar.png') }}" alt="User Avatar" class="rounded-circle" width="120" height="120">
                    <h3 class="mt-3">{{ $user->first_name }} {{ $user->last_name }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h5>Email</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5>Books Purchased</h5>
                        <p>{{ $user->books_count }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.theme.footer')
@include('user.theme.script')
