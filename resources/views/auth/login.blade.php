<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="field mb-4">
            <label for="email" class="label">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" name="email" required autofocus
                    autocomplete="username" />
            </div>

            @include('includes.form-errors', [
                'field' => 'email',
                'type' => 'horizontal',
            ])
        </div>

        <!-- Password -->
        <div class="field mb-4">
            <label for="password" class="label">Password</label>

            <input id="password" class="input" type="password" name="password" required
                autocomplete="current-password" />
            @include('includes.form-errors', [
                'field' => 'password',
                'type' => 'horizontal',
            ])
        </div>

        <!-- Remember Me -->
        <div class="field">
            <label for="remember_me" class="is-flex is-align-items-center">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="ml-2">Remember me</span>
            </label>
        </div>

        <div class="is-flex is-align-items-center is-justify-content-end">
            @if (Route::has('password.request'))
                <a class="mr-4" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="button">
                Sign in
            </button>
        </div>
    </form>
</x-guest-layout>
