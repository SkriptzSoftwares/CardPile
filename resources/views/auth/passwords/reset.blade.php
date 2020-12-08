@extends('layouts.bg')

@section("title")
    Cardpile - Password Reset
@endsection


@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('password.update') }}">--}}
    {{--                        @csrf--}}

    {{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Reset Password') }}--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7 col-xl-6">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="col-xl-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Password Reset</h4>
                            </div>
                            <form class="user" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="form-group"><input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                               id="InputEmail" aria-describedby="emailHelp"
                                                               placeholder="Email Address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/></div>
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input type="password"
                                                                              class="form-control form-control-user @error('password') is-invalid @enderror"
                                                                              id="PasswordInput" placeholder="Password"
                                                                              name="password"/></div>
                                    <div class="col-sm-6"><input type="password" class="form-control form-control-user"
                                                                 id="RepeatPasswordInput" placeholder="Repeat Password"
                                                                 name="password_confirmation"/></div>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register
                                    Account
                                </button>
                                <hr/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
