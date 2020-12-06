@extends("layouts.bg")

@section("title")
    Cardpile - Login
@endsection

@section("content")
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-5">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="col-lg-6 col-xl-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Welcome Back!</h4>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group"><input class="form-control form-control-user @error('email') is-invalid @enderror" type="text" id="InputName"  placeholder="Enter Email Address..." name="login" value="{{ old('email') }}" required autofocus></div>
                                <div class="form-group"><input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="InputPassword" placeholder="Password" name="password" required autocomplete="current-password"></div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <div class="form-check"><input class="form-check-input custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"><label class="form-check-label custom-control-label" for="remember">Remember Me</label></div>
                                    </div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="{{route("password.request")}}">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="{{route('register')}}">Create an Account!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
