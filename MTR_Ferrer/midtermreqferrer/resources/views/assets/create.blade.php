@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow max-w-2xl mx-auto">
    <h2 class="text-xl font-bold mb-4">{{ isset($asset) ? 'Edit Asset' : 'Add New Asset' }}</h2>
    <form action="{{ isset($asset) ? route('assets.update', $asset) : route('assets.store') }}" method="POST">
        @csrf
        @if(isset($asset))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $asset->name ?? '') }}" 
                   class="w-full p-2 border rounded @error('name') border-red-500 @enderror">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Serial Number</label>
            <input type="text" name="serial_number" value="{{ old('serial_number', $asset->serial_number ?? '') }}"
                   class="w-full p-2 border rounded @error('serial_number') border-red-500 @enderror">
            @error('serial_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Location</label>
            <input type="text" name="location" value="{{ old('location', $asset->location ?? '') }}"
                   class="w-full p-2 border rounded @error('location') border-red-500 @enderror">
            @error('location') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
    <label class="block text-gray-700">Status</label>
    <select name="status" class="w-full p-2 border rounded @error('status') border-red-500 @enderror">
        <option value="" disabled {{ old('status', $asset->status ?? '') == '' ? 'selected' : '' }}>Please select</option>
        <option value="in_use" {{ (old('status', $asset->status ?? '') == 'in_use') ? 'selected' : '' }}>In Use</option>
        <option value="under_maintenance" {{ (old('status', $asset->status ?? '') == 'under_maintenance') ? 'selected' : '' }}>Under Maintenance</option>
        <option value="retired" {{ (old('status', $asset->status ?? '') == 'retired') ? 'selected' : '' }}>Retired</option>
    </select>
    @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>


<div class="mb-4">
    <label class="block text-gray-700">Description</label>
    <textarea name="description" class="w-full p-2 border rounded @error('description') border-red-500 @enderror">{{ old('description', $asset->description ?? '') }}</textarea>
    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>


        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            {{ isset($asset) ? 'Update' : 'Create' }} Asset
        </button>
    </form>
</div>
@endsection