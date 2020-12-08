@extends("layouts.bg")

@section("title")
    Cardpile - Register
@endsection

@section("content")
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7 col-xl-6">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="col-xl-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="Name"
                                           placeholder="Username"
                                           class="form-control form-control-user @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name"
                                           autofocus/></div>

                                <div class="form-group"><input type="email"
                                                               id="InputEmail" aria-describedby="emailHelp"
                                                               placeholder="Email Address"
                                                               class="form-control form-control-user @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}" required
                                                               autocomplete="email"/></div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input type="password"
                                                                              class="form-control form-control-user @error('password') is-invalid @enderror"
                                                                              name="password" required
                                                                              autocomplete="new-password"
                                                                              id="PasswordInput"
                                                                              placeholder="Password"/></div>
                                    <div class="col-sm-6"><input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                                 id="RepeatPasswordInput" placeholder="Repeat Password"
                                                                 name="password_confirmation" required autocomplete="new-password"/></div>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register
                                    Account
                                </button>
                                <hr/>
                            </form>
                            <div class="text-center"><a class="small" href="{{route("password.request")}}">Forgot
                                    Password?</a></div>
                            <div class="text-center"><a class="small" href="{{route("login")}}">Already have an account?
                                    Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
