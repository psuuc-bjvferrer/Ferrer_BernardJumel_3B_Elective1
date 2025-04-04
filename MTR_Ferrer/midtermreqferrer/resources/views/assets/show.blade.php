@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-2xl mx-auto">
    <h2 class="text-xl font-bold mb-6 text-gray-800">{{ $asset->name }}</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="space-y-1 border-b pb-4">
            <p class="text-gray-600 font-semibold">Serial Number:</p>
            <p class="text-gray-900">{{ $asset->serial_number }}</p>
        </div>
        <div class="space-y-1 border-b pb-4">
            <p class="text-gray-600 font-semibold">Location:</p>
            <p class="text-gray-900">{{ $asset->location }}</p>
        </div>
        <div class="space-y-1 border-b pb-4">
            <p class="text-gray-600 font-semibold">Status:</p>
            <p class="text-gray-900">
                <span class="{{ $asset->status == 'in_use' ? 'text-green-600' : ($asset->status == 'under_maintenance' ? 'text-yellow-600' : 'text-red-600') }}">
                    {{ ucfirst(str_replace('_', ' ', $asset->status)) }}
                </span>
            </p>
        </div>
        <div class="space-y-1 border-b pb-4">
            <p class="text-gray-600 font-semibold">Description:</p>
            <div class="text-gray-900 max-h-20 overflow-y-auto">
                {{ $asset->description ?? 'N/A' }}
            </div>
        </div>
    </div>
    <div class="mt-8 flex space-x-4">
        <a href="{{ route('assets.edit', $asset) }}" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">Edit</a>
        <a href="{{ route('assets.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">Back</a>
    </div>
</div>
@endsection