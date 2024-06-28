@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
<style>
    body {
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f5f4f6;
        width: 100%;
    }

    .container {
        background-color: #ffffff;
        padding: 30px;
        width: 50%;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
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

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .input-group .input-group-addon {
        padding: 10px;
        background-color: #eeeeee;
        border: 1px solid #cccccc;
        border-right: none;
        border-radius: 4px 0 0 4px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 0 4px 4px 0;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus {
        outline: none;
        border-color: #3e5399;
    }

    .btn {
        background-color: #1422ea;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .btn:hover {
        background-color: #081c64;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .card-header {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .invalid-feedback {
        display: block;
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="text-center">
            <div class="user-icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input id="name" type="text" name="name" placeholder="Enter your name" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input id="email" type="email" name="email" placeholder="Enter your email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-key"></i></span>
                        <input id="password" type="password" name="password" placeholder="Enter your password" required class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-key"></i></span>
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm your password" required class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn">{{ __('Register') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
