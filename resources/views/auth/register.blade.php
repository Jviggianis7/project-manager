<x-guest-layout>
    <x-authentication-card>
    <div class="bg-green-800 text-gray-600 py-4 px-6">
            <x-slot name="logo">
                <div class="flex justify-center items-center">
                    <img src="vendor/adminlte/dist/img/logoC2.png" style="width: 100px; height: auto;" alt="Logo">
                </div>
            </x-slot>
            <h2 class="text-center text-2xl font-semibold mt-2">Registro</h2>
        </div>

        <x-validation-errors class="mb-4" />

        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        </head>

        <form method="POST" action="{{ route('register') }}" class="mt-8">
            @csrf

            <div>
                <x-label for="name" :value="__('Nombre')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <i class="fas fa-sign-in-alt fa-lg mr-2"></i> {{ __('Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    <i class="fas fa-user-plus fa-lg mr-2"></i>
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>