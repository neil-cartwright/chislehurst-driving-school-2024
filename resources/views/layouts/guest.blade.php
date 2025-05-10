@extends('layouts.app')

@section('page-description', 'Login page for chislehurst driving school customers')

@section('title', 'Login')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>
                    @if (request()->routeIs('login'))
                        Sign in
                    @endif
                    @if (request()->routeIs('password.request'))
                        Forgot password
                    @endif
                </a></li>
        </ul>
    </nav>

    <x-wrapper>
        <div class="columns is-centered is-flex-grow-1 is-flex is-align-items-center py-4">
            <div class="column is-6">

                @if (request()->routeIs('login'))
                    <div class="notification">
                        <p>If you're logging in for the first time <a href="/register">sign up here first</a></p>
                    </div>
                @endif

                @if (request()->routeIs('password.request'))
                    <div class="notification">
                        <p>
                            Forgot your password? No problem. Just enter your email address and I will email you a password
                            reset link that will allow you to choose a new one.
                        </p>

                    </div>
                @endif

                <div class="box">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </x-wrapper>
@endsection
