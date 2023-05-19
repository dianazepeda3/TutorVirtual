<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>
        <img src= "{{ asset('img/tutor_virtual.png') }}" alt=""><br>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="codigo" value="{{ __('Codigo') }}" />
                <x-input id="codigo" class="block mt-1 w-full" type="number" name="codigo" :value="old('codigo')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
        
            <div class="flex items-center justify-end mt-4">               
                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
