@extends('layouts.auth')

@section('content')

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                    <input id="name" name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror"  placeholder="Name" required autocomplete="name" autofocus>
                                    @error('name')
                                           <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                           </span>
                                    @enderror

                            </div>
                            <div class="form-group row">
                                <input name="email" type="email" class="form-control form-control-user" id="email" value="{{ old('name') }}" placeholder="Email" required autocomplete="name" autofocus>
                                @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                    <input name="password" type="password" class="form-control form-control-user" id="password" placeholder="Password">
                                    @error('password')
                                           <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                           </span>
                                    @enderror

                            </div>
                            <div class="form-group row">
                                    <label for="password-confirm"></label>
                                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="password-confirm" required autocomplete="new-password" placeholder="Repeat Password">
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                {{ __('Register') }}
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
