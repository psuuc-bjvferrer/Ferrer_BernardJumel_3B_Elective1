<x-guest-layout>
    <div class="h-full flex items-center justify-center bg-bluegray-100">
        <div class="bg-white p-4 rounded w-full max-w-xs">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-xs font-medium text-gray-600" />
                    <x-text-input 
                        id="name" 
                        class="mt-1 w-full rounded border-bluegray-300 focus:border-blue-600 focus:ring-0" 
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        required 
                        autofocus 
                        autocomplete="name" 
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs text-red-500" />
                </div>

                <!-- Email Address -->
                <div class="mb-2">
                    <x-input-label for="email" :value="__('Email')" class="text-xs font-medium text-gray-600" />
                    <x-text-input 
                        id="email" 
                        class="mt-1 w-full rounded border-bluegray-300 focus:border-blue-600 focus:ring-0" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autocomplete="username" 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <x-input-label for="password" :value="__('Password')" class="text-xs font-medium text-gray-600" />
                    <x-text-input 
                        id="password" 
                        class="mt-1 w-full rounded border-bluegray-300 focus:border-blue-600 focus:ring-0" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="new-password" 
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-2">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-xs font-medium text-gray-600" />
                    <x-text-input 
                        id="password_confirmation" 
                        class="mt-1 w-full rounded border-bluegray-300 focus:border-blue-600 focus:ring-0" 
                        type="password" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password" 
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs text-red-500" />
                </div>

                <!-- Already Registered Link -->
                <div class="mb-2 text-sm">
                    <a 
                        class="text-blue-600 hover:text-blue-800 transition" 
                        href="{{ route('login') }}"
                    >
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <!-- Register Button -->
                <div class="flex justify-center mt-2">
                    <x-primary-button 
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium py-1.5 px-4 rounded transition text-center"
                    >
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>