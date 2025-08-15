@include('user.theme.css')
@include('user.theme.header')

<div class="container py-5">

    {{-- 🔼 Show genre-specific header image --}}
    @php
        $genre = request('genre');
        $headerImage = match ($genre) {
            'Fiction' => url('/assets/images/fi-hor.png'),
            'Non-fiction' => url('/assets/images/non-fi.png'),
            'Sci-Fi' => url('/assets/images/sci-fi-hor.png'),
            default => url('/assets/images/all-genre-hor.png'), // for "all" or any other
        };
    @endphp

    

    <h1 class="mb-4">Books</h1>

    <!-- Filter by Genre -->
    <form method="GET" class="mb-4">
        <select name="genre" onchange="this.form.submit()" class="form-select w-auto">
            <option value="all" {{ request('genre') == 'all' ? 'selected' : '' }}>All Genres</option>
            @foreach($genres as $genreOption)
                <option value="{{ $genreOption }}" {{ request('genre') == $genreOption ? 'selected' : '' }}>{{ $genreOption }}</option>
            @endforeach
        </select>
    </form>

    @if(session()->has('user_id'))
        <p>User ID in session: {{ session('user_id') }}</p>
    @else
        <p>No user logged in.</p>
    @endif
<div class="mb-4 text-center">
        <img src="{{ $headerImage }}" alt="Genre Banner" class="img-fluid rounded" style="max-height: 250px; object-fit: cover;">
    </div>
    <!-- Books Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($books as $book)
            <div class="col">
                <a href="{{ route('books.show', $book->id) }}" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($book->description, 100) }}</p>
                            <p class="card-text"><small class="text-muted">{{ $book->author }}</small></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">${{ number_format($book->price, 2) }}</span>
                                <span class="badge bg-secondary">{{ $book->genre }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p>No books found.</p>
        @endforelse
    </div>

    <div class="mt-4 d-flex justify-content-center">
    {{ $books->withQueryString()->links() }}
</div>

</div>

@include('user.theme.footer')
@include('user.theme.script')
