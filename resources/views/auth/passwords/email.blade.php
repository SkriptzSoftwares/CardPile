@extends('layouts.bg')

@section("title")
    Cardpile - Forgot your password?
@endsection

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    <form method="POST" action="{{ route('password.email') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Send Password Reset Link') }}--}}
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
        <div class="col-md-9 col-lg-7">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-2">Forgot Your Password?</h4>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and
                                        we'll send you a link to reset your password!</p>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <form class="user" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group"><input
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            type="email" id="InputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus></div>
                                    <button class="btn btn-primary btn-block text-white btn-user"
                                            type="submit">Reset Password
                                    </button>
                                </form>
                                <div class="text-center">
                                    <hr>
                                    <a class="small" href="{{route("register")}}">Create an Account!</a></div>
                                <div class="text-center"><a class="small" href="{{route("login")}}">Already have an
                                        account? Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
