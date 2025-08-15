
<div class="container">
    <h2>{{ $book->title }} - Read</h2>
    <iframe src="{{ asset($book->pdf_url)  }}" width="100%" height="600px"></iframe>
</div>

