<!doctype html>
<html lang="en">

<head>
  @include('Admin.theme.css')
</head>

<body>
  <br>
  <br>
  <br>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{ url('/assets/images/Adminlogin.jpg') }}" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">@if(session('Message'))
        <div class="alert alert-success">{{session('Message')}}</div>
      @endif
      <div class="d-flex align-items-center mb-3 pb-1">
                      <img src="{{ url('/assets/images/logo.png') }}" height="70px">
                      <span class="h1 fw-bold mb-0"> Admin Panel</span>
                    </div>
          <form method="POST" action="{{url('Admin/adminlogin')}}">
            @csrf


            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
  @include('admin.theme.footer')
  @include('Admin.theme.script')

</body>