<x-guest-layout>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-center py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <img src="{{ asset('images/finish_image.png') }}" alt="logo">
                  </div>
                  <h4>Hello! let's get started</h4>
                  <h6 class="font-weight-light">Sign in to continue.</h6>
                  @if ($errors->any())
                      <div class="alert alert-danger" role="alert">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                  @endif
                  <form method="POST" action="{{ route('login') }}" class="pt-3">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" id="nik" placeholder="NIK" name="txtNik" :value="old('txtNik')" required autofocus>
                    </div>
                    <div class="form-group">
                      <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                        <div class="input-group-append align-items-center btn-primary">
                          <span class="btn btn-sm text-white" onclick="PasswordToggle()">
                            <i id="passToggle" class="las la-eye"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                          Keep me signed in
                        </label>
                      </div>
                      {{-- <a href="#" class="auth-link text-black">Forgot password?</a> --}}
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

      @push('scripts')
        <script defer>

          function PasswordToggle(){
            var x = document.getElementById("password");
            var y = document.getElementById('passToggle');
            console.log(y);
            if (x.type === "password") {
              x.type = "text";
              y.classList.toggle("la-eye-slash");
              y.classList.toggle("la-eye");
            } else {
              x.type = "password";
              y.classList.toggle("la-eye");
              y.classList.toggle("la-eye-slash");
            }
          }
        </script>
      @endpush
</x-guest-layout>
