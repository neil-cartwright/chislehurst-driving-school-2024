<x-guest-layout>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="field mb-6">
            <label for="email" class="label">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" name="email" required autofocus />
            </div>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
            @include('includes.form-errors', [
                'field' => 'email',
                'type' => 'horizontal',
            ])
        </div>

        <div class="is-justify-items-center is-justify-content-end is-flex">
            <button class="button">
                Email password reset link
            </button>
        </div>
    </form>
</x-guest-layout>
