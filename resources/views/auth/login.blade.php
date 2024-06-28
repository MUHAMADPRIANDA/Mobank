@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endpush

@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            align-items: center
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container button {
            align-items: center;
            background-color: #1643b4;
            color: white;
            padding: 14px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 20pt;
            cursor: pointer;
            width: 70%;
        }

        .container button2 {
            background-color: #000206;
            color: white;
            padding: 10px 15px;
            margin: 10px 0;
            border: none;
            border-radius: 20pt;
            cursor: pointer;
            width: 50%;
        }

        .container button:hover {
            background-color: #1129a5;
        }

        .container button2:hover {
            background-color: #2d2d32;
        }

        .container .sign up {
            margin-top: 3px;
            font-size: 14px;
        }

        .container .forgot a {
            color: #1b64b3;
            text-decoration: none;
        }

        .container .forgot a:hover {
            text-decoration: underline;
        }

        .user-icon {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #ffc107;
            color: white;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            margin-bottom: 50px;
        }

        .container input {
            position: relative;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LOGIN') }}</div>

                <div class="card-body">
                    <div class="text-center">
                        <div class="user-icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary" align-items="center">
                                    {{ __('Login') }}
                                </button>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <h4>Belum ada akun? Klik disini untuk buat akun</h4>
                        <a href="{{ route('register') }}" class="btn btn-secondary">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
