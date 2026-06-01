@extends('partials.layout')
@section('content')
<div class="card mx-auto max-w-md my-10 shadow-md bg-base-100 border border-base-300">
    <div class="card-body space-y-4">
        <p class="mb-4 text-sm">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="text-sm text-success font-medium">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="flex justify-between pt-2 items-center">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-sm btn-primary">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-sm btn-ghost text-gray-100 hover:text-white">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>

@endsection