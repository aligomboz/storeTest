@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-left text-uppercase mb-0">{{ __('Login') }}</h1>
                </div>
                <div class="col-lg-6 text-lg-right">

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="h5 text-uppercase text-left login_title mb-4">{{ __('Login') }}</h2>

                <form class="text-left" method="POST" action="{{ route('login') }}" dir="">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-small text-uppercase" for="username">{{ __('Username') }}</label>
                                <input class="form-control form-control-lg" name="username" type="text" value="{{ old('username') }}" placeholder="Enter your username">
                                @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-small text-uppercase" for="password">{{ __('Password') }}</label>
                                <input class="form-control form-control-lg" name="password" type="password" placeholder="Enter your password">
                                @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label text-small" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <button class="btn btn-dark" type="submit">{{ __('Login') }}</button>

                                </div>
                                <div class="form-group col-lg-4">
                                    
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                                </div>

                                <div class="form-group col-lg-4">
                                    @if (Route::has('register'))
                                    <a class="btn btn-secondary float-right" href="{{ route('register') }}">
                                        {{ __('Haven\'t an account') }}
                                    </a>
                                @endif
                                </div>

                             

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
