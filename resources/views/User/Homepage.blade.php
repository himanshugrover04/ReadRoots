<head>
  @include('user.theme.css')
  <style>
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}


.flip-card {
  background-color: transparent;
  width: 100%;
  height: 300px; /* You can adjust to 350px or 400px */
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 8px;
  overflow: hidden;
}

.flip-card-front img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.flip-card-back {
  background-color: #f8f9fa;
  color: #000;
  transform: rotateY(180deg);
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 15px;
  text-align: center;
}


</style>
</head>
<body>

@include('user.theme.header')
<div style="width:70% ,height:200px">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/assets/images/holding-phone.jpg') }}" class="d-block w-100 carousel-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>New Releases Just a Tap Away</h5>
        <p>Stay ahead of the curve with the latest bestsellers and trending titles—available to download and read instantly.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/assets/images/travel-reading.jpg')}}" class="d-block w-100 carousel-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Read Anywhere, Anytime</h5>
        <p>Turn your device into a library. Instantly access thousands of E-books from every genre and start reading in seconds.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/images/reading-in-phone.jpg') }}" class="d-block w-100 carousel-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Your Portable Library</h5>
        <p>Carry hundreds of books with you wherever you go. Read offline, highlight passages, and enjoy your library on the move.</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
<div class="container mt-5">
  <!-- First Row -->
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
      <div class="card h-100">
        <img src="{{ url('/assets/images/fi.png')}}" class="card-img-top" alt="Image 1">
        <div class="card-body text-center">
          <h5 class="card-title">Imaginative storytelling that transports readers to worlds both familiar and fantastical.</h5>
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="{{ url('/assets/images/non-fi.png')}}" class="card-img-top" alt="Image 2">
        <div class="card-body text-center">
          <h5 class="card-title">Fact-based narratives that inform, educate, or explore real events and ideas.</h5>
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="{{ url('/assets/images/sci-fi.png')}}" class="card-img-top" alt="Image 3">
        <div class="card-body text-center">
          <h5 class="card-title">Speculative tales that push the boundaries of science, technology, and human possibility.</h5>
          
        </div>
      </div>
    </div>

  </div>

  <!-- Second Row -->
  <!-- Second Row -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">

  <div class="col">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="{{ url('/assets/images/engage.png') }}" alt="Card 4">
      </div>
      <div class="flip-card-back">
        <h5>Engaging Community: </h5>
        <p>Join a passionate reading community, share reviews, and participate in discussions.</p>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="{{ url('/assets/images/events.png') }}" alt="Card 5">
      </div>
      <div class="flip-card-back">
        <h5>Reading Challenges & Events: </h5>
        <p>Participate in fun challenges, book clubs, and literary events.</p>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="{{ url('/assets/images/reco.png') }}" alt="Card 6">
      </div>
      <div class="flip-card-back">
        <h5>Personalized Recommendations: </h5>
        <p>Discover books based on your interests and reading habits.</p>
      </div>
    </div>
  </div>
</div>


</div>


</div>

</div>

<section class="py-5 text-center bg-light">
  <div class="container">
    <img src="{{ url('/assets/images/logo.png') }}" height="70px">
    <h2 class="mb-4">About ReadRoots</h2>
    <p class="lead">
      At <strong>ReadRoots</strong>, we believe in nurturing minds through the power of books. Whether you're a curious student, a passionate reader, or a lifelong learner, our mission is to connect you with stories, knowledge, and insights that inspire growth. With a wide collection of curated content and a user-friendly experience, ReadRoots is your digital gateway to a deeper understanding of the world.
    </p>
  </div>
</section>

<!-- Carousel wrapper -->
<div id="reviewCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="false">
  <div class="carousel-inner text-center p-4">
    <div class="carousel-item active">
      <img src="{{ url('/assets/images/man.png') }}" class="rounded-circle mb-3" style="height:80px">
      <h5>Amit Sharma</h5>
      <p class="text-muted">"Great service and beautiful books!"</p>
      <div class="text-warning">★★★★★</div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/images/woman.png') }}" class="rounded-circle mb-3" style="height:80px">
      <h5>Neha Kapoor</h5>
      <p class="text-muted">"Fast delivery and excellent packaging."</p>
      <div class="text-warning">★★★★☆</div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('/assets/images/profile.png') }}" class="rounded-circle mb-3" style="height:80px">
      <h5>Raj Verma</h5>
      <p class="text-muted">"Amazing collection and great prices."</p>
      <div class="text-warning">★★★★★</div>
    </div>
  </div>
</div>



<script type="text/javascript">
  (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      v.onload = function() {
        window.voiceflow.chat.load({
          verify: { projectID: '670756ef53f9a7cc3db7255b' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production',
          voice: {
            url: "https://runtime-api.voiceflow.com"
          }
        });
      }
      v.src = "https://cdn.voiceflow.com/widget-next/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
  })(document, 'script');
</script>
@include('user.theme.footer')
@include('user.theme.script')