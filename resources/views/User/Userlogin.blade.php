<!doctype html>
<html lang="en">

<head>
  @include('User.theme.css')
</head>

<body>
  <section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ url('/assets/images/login-form.PNG') }}" alt="login form" class="img-fluid"
                  style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

                  @if(session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
            </div>
          @endif
                  <form method="POST" action="{{url('User/login')}}">
                    @csrf

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <img src="{{ url('/assets/images/logo.png') }}" height="70px">
                      <span class="h1 fw-bold mb-0">ReadRoots</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in to your account</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" name="email" class="form-control" />
                      <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" name="password" class="form-control" />
                      <label class="form-label" for="form3Example4">Password</label>
                    </div>


                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                        href="{{ route('register') }}" style="color: #393f81;">Register here</a></p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><script type="text/javascript">
    (function(d, t) {
        var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
        v.onload = function() {
          window.voiceflow.chat.load({
            verify: { projectID: '670756ef53f9a7cc3db7255b' },
            url: 'https://general-runtime.voiceflow.com',
            versionID: 'production'
          });
        }
        v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; 
        v.type = "text/javascript"; 
        s.parentNode.insertBefore(v, s);
    })(document, 'script');
  </script>

  @include('User.theme.script')
</body>

</html>