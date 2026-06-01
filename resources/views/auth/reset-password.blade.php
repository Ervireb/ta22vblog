@extends('partials.layout')
@section('content')
<div class="card mx-auto max-w-md my-10 shadow-md bg-base-100 border border-base-300">
    <div class="card-body space-y-4">
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <label for="email" class="form-control w-full">
            <span class="label-text font-semibold">Email</span>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="you@example.com" class="input input-bordered w-full @error('email') input-error @enderror"/>
            @error('email')
                <span class="label-text-alt mt-1 text-error">{{ $message }}</span>
            @enderror
        </label>

        <!-- Password -->
        <label class="form-control w-full">
            <span class="label-text font-semibold">Password</span>
            <input type="password" name="password" placeholder="New password" class="input input-bordered w-full @error('password') input-error @enderror"/>
            @error('password')
                <span class="label-text-alt mt-1 text-error">{{ $message }}</span>
            @enderror
        </label>

        <!-- Confirm Password -->
        <label class="form-control w-full">
            <span class="label-text font-semibold">Confirm Password</span>
            <input type="password" name="password_confirmation" placeholder="Confirm new password" class="input input-bordered w-full @error('password_confirmation') input-error @enderror"/>
            @error('password_confirmation')
                <span class="label-text-alt mt-1 text-error">{{ $message }}</span>
            @enderror
        </label>
        <div class="flex justify-end mt-4">
            <button type="submit" class="btn btn-primary btn-sm">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection
