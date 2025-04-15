@extends('layouts.app')

@section('content')
    <div class="mb-4">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">__('Password')</label>
            <input type="password" name="password" class="form-control @error('title') is-invalid @enderror" id="password" required autocomplete="current-password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
        </div>
    </form>
@endsection
