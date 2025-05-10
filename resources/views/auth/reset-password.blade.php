@extends('layouts.app')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Reset Password</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered my-4">
            <div class="column is-6">

                @if (session('status'))
                    <div class="notification is-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card ">
                    <header class="card-header">
                        <p class="card-header-title">
                            Reset password
                        </p>
                    </header>
                    <div class="card-content">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="content">
                                <div class="control is-horizontal mb-4">
                                    <div class="control-label mb-1">
                                        <label class="label">E-mail</label>
                                    </div>
                                    <div class="control is-fullwidth">
                                        <input name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                                            type="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                </div>

                                @include('includes.form-errors', [
                                    'field' => 'email',
                                    'type' => 'horizontal',
                                ])

                                <div class="control is-horizontal mb-4">
                                    <div class="control-label mb-1">
                                        <label class="label">Password</label>
                                    </div>
                                    <div class="control is-fullwidth">
                                        <input name="password"
                                            class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password"
                                            value="{{ old('password') }}" required>
                                    </div>
                                </div>

                                @include('includes.form-errors', [
                                    'field' => 'password',
                                    'type' => 'horizontal',
                                ])

                                <div class="control is-horizontal mb-4">
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

                                <div class="control is-horizontal is-flex is-justify-content-right mt-6">
                                    <div class="control-label">
                                        <!-- spacer -->
                                    </div>
                                    &nbsp;
                                    <div class="control is-fullwidth">
                                        <button class="button">Reset password</button>
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
