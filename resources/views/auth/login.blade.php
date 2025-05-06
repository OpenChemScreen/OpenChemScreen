@extends('.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <form method="post" action="{{ route('login') }}">
                @csrf
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
                <div class="form-check mb-4">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember me') }}
                    </label>
                </div>
                <div class="mb-4">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
