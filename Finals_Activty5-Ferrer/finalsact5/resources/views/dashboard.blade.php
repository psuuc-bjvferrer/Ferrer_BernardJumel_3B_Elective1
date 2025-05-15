<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-500 dark:text-blue-300 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center space-x-4">
                        <span class="text-lg font-medium text-blue-500 dark:text-blue-300">
                            {{ __("You're logged in!") }}
                        </span>
                    </div>
                    <div class="mt-6 bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-sm">
                        <h3 class="text-blue-500 dark:text-blue-300 font-semibold">Welcome</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">
                            Explore your dashboard and manage your tasks with ease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>