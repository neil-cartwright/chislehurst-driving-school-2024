@extends('layouts.app')

@section('page-description', 'Sign up page for chislehurst driving school customers')


@section('title', 'Sign up')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Sign up</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6 mb-6">
                @if (Route::has('register'))
                    <div class="notification">Please sign up with the same email address you provided to your
                        Instructor.
                    </div>
                @endif
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Sign up
                        </p>
                    </header>
                    <div class="card-content">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="content">
                                <div class="field">
                                    <div class="control is-horizontal">
                                        <div class="control-label mb-1">
                                            <label class="label">Name</label>
                                        </div>
                                        <div class="control is-fullwidth">
                                            <input name="name"
                                                class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                                value="{{ old('name') }}" required autofocus>
                                        </div>
                                    </div>

                                </div><!-- field -->

                                <div class="field">
                                    <div class="control is-horizontal">
                                        <div class="control-label mb-1">
                                            <label class="label">E-mail</label>
                                        </div>
                                        <div class="control is-fullwidth">
                                            <input name="email"
                                                class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text"
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                    @include('includes.form-errors', [
                                        'field' => 'email',
                                        'type' => 'horizontal',
                                    ])

                                </div>

                                <div class="field">
                                    <div class="control is-horizontal">
                                        <div class="control-label mb-1">
                                            <label class="label">Password</label>
                                        </div>
                                        <div class="control is-fullwidth">
                                            <input name="password"
                                                class="input{{ $errors->has('password') ? ' is-danger' : '' }}"
                                                type="password" value="{{ old('password') }}" required>
                                        </div>
                                    </div>
                                    @include('includes.form-errors', [
                                        'field' => 'password',
                                        'type' => 'horizontal',
                                    ])
                                </div>

                                <div class="field">
                                    <div class="control is-horizontal">
                                        <div class="control-label mb-1">
                                            <label class="label">Confirm password</label>
                                        </div>
                                        <div class="control is-fullwidth">
                                            <input name="password_confirmation"
                                                class="input{{ $errors->has('password-confirm') ? ' is-danger' : '' }}"
                                                type="password" value="{{ old('password-confirm') }}" required>
                                        </div>
                                    </div>
                                    @include('includes.form-errors', [
                                        'field' => 'password-confirm',
                                        'type' => 'horizontal',
                                    ])
                                </div>


                                <div class="field is-flex is-justify-content-end mt-6">
                                    <div class="control is-horizontal">
                                        <div class="control-label">
                                            <!-- spacer -->
                                        </div>
                                        <div class="control is-fullwidth">
                                            <button class="button">Sign up</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-wrapper>
@endsection
