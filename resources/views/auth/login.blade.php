<x-guest-layout>
    <x-authentication-card>
        <div class="bg-green text-gray-600 py-4 px-6">
            <x-slot name="logo">
                <div class="flex justify-center items-center">
                    <img src="vendor/adminlte/dist/img/logoC2.png" style="width: 100px; height: auto;" alt="Logo">
                </div>
            </x-slot>
            <h2 class="text-center text-2xl font-semibold mt-2">Inicio de Sesión</h2>
        </div>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        </head>

        <form method="POST" action="{{ route('login') }}" class="mt-8">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>

                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                    <i class="fas fa-question-circle fa-lg"></i>
                </a>
            </div>

            <x-button class="mt-4">
                <i class="fas fa-sign-in-alt fa-lg mr-2"></i>
            </x-button>
        </form>

        <div class="mt-6">
            <p class="text-center text-sm text-gray-600">
                {{ __("No tienes una cuenta?") }}
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    <i class="fas fa-user-plus fa-lg mr-2"></i>
                </a>
            </p>
        </div>
    </x-authentication-card>
</x-guest-layout>
