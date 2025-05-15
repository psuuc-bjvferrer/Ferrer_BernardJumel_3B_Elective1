<x-guest-layout>
    <div class="h-full flex items-center justify-center bg-bluegray-100">
        <div class="bg-white p-4 rounded w-full max-w-xs">
            <!-- Session Status -->
            <x-auth-session-status class="mb-2 text-xs text-gray-500" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-xs font-medium text-gray-600" />
                    <x-text-input 
                        id="email" 
                        class="mt-1 w-full rounded border-bluegray-300 focus:border-blue-600 focus:ring-0" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
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
                        autocomplete="current-password" 
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-500" />
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="mb-2 flex justify-between items-center text-sm">
                    <div class="flex items-center">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            class="h-3 w-3 rounded border-bluegray-300 text-blue-600 focus:ring-0" 
                            name="remember"
                        >
                        <label for="remember_me" class="ml-1 text-gray-500">{{ __('Remember me') }}</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a 
                            class="text-blue-600 hover:text-blue-800 transition" 
                            href="{{ route('password.request') }}"
                        >
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div class="flex justify-center mt-2">
                    <x-primary-button 
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium py-1.5 px-4 rounded transition text-center"
                    >
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>