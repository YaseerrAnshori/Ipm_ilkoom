@extends('layouts.app')

@section('content')
<header id="login-header" class="header-image text-white d-none d-md-block">
    <div class="header-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>LOGIN</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Tempore molestiae reiciendis nemo et odit porro corrupti rerum tempora non,
                    iste laudantium exercitationem aperiam consequatur libero sequi culpa sed quisquam? Harum!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Tempore molestiae reiciendis nemo et odit porro corrupti rerum tempora non,
                    iste laudantium exercitationem aperiam consequatur libero sequi culpa sed quisquam? Harum!
                </p>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container my-5"></div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h1 class="text-center">Login</h1>
            <hr>
            <form  method="POST" action="{{ route('login') }}">
            @csrf


            <div class="mb-3 row">
                <label for="email" class="col-md-4 col-form-label text-md-end">
                    Email
                </label>

                <div class="col-md-6">
                    <input type="text"id="email" class="form-control @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required autocomplete="email" autofocus
                    >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            {{-- input password --}}

            <div class="mb-3 row">
                <label for="password" class="col-md-4 col-form-label text-md-end">
                    Password
                </label>

                <div class="col-md-6">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password"
                    value="{{ old('password') }}"
                    required autocomplete="password" autofocus
                    >

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- remember --}}
            <div class="mb-3 row col-md-5 offset-md-4">
                <div class="form-check ms-2">
                    <input type="checkbox" class="form-check-input"
                     name="remember" id="remember"
                     {{ old('remember') ? 'checked': ''}}
                     >

                     <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>

                </div>
            </div>

            {{-- Button login --}}

            <div class="form group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button class="btn btn-primary">{{ __('login') }}</button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="btn btn-link text-decoration-none"> {{ __('Forgot Yout Password?') }}</a>
                    @endif
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection


