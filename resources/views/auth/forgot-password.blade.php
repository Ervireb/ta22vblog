@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl mx-auto max-w-md">
            <div class="card-body">
                <div class="mb-4 text-sm text-base-content/70">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered @error('email') input-error @enderror w-full" autofocus/>
                        <div class="label">
                            @error('email')
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>

                    <div class="flex content-center justify-end gap-2 mt-4">
                        <input type="submit" class="btn btn-primary btn-sm" value="{{ __('Send Password Reset Link') }}">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection