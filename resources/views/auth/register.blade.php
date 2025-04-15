@extends('.layouts.app')

@section('content')
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" id="name" required autofocus autocomplete="name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('title') is-invalid @enderror" id="email" aria-describedby="emailHelp" required autofocus autocomplete="username">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('title') is-invalid @enderror" id="password" required autocomplete="current-password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control @error('title') is-invalid @enderror" id="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <a class="" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection
