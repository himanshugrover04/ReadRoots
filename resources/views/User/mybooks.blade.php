@include('user.theme.css')
@include('user.theme.header')
<div class="container">
    <h2 class="mb-4">My Books</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    @if($books->isEmpty())
        <p>You have not purchased any books yet.</p>
    @else
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="Cover Image" style="height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->author }}</p>
                           

                            {{-- Read Book Button (opens PDF) --}}
                            @if($book->pdf_url)
                                <a href="{{ route('book.read', $book->id) }}" class="btn btn-primary">
    Read Book
</a>
@else
                                <button class="btn btn-secondary mt-auto" disabled>PDF Not Available</button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('user.theme.script')