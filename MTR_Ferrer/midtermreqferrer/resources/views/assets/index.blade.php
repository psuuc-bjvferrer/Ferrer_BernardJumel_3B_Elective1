@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">All Assets</h2>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 text-left font-semibold">Name</th>
                    <th class="p-3 text-left font-semibold">
                        <a href="{{ route('assets.index', ['sort' => 'serial_number']) }}" class="hover:underline">
                            Serial
                        </a>
                    </th>
                    <th class="p-3 text-left font-semibold">Location</th>
                    <th class="p-3 text-left font-semibold">Status</th>
                    <th class="p-3 text-left font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($assets as $asset)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 align-middle">{{ $asset->name }}</td>
                    <td class="p-3 align-middle">{{ $asset->serial_number }}</td>
                    <td class="p-3 align-middle">{{ $asset->location }}</td>
                    <td class="p-3 align-middle">{{ $asset->status }}</td>
                    <td class="p-3 align-middle">
                        <div class="flex space-x-3">
                            <a href="{{ route('assets.show', $asset) }}" class="text-blue-600 hover:underline">View</a>
                            <a href="{{ route('assets.edit', $asset) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('assets.destroy', $asset) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-3 text-center text-gray-500">No assets found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
