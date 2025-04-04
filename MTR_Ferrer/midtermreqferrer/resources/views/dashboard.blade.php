@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-lg font-semibold">Total Assets</h3>
        <p class="text-3xl font-bold">{{ $totalAssets }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-lg font-semibold">In Use</h3>
        <p class="text-3xl font-bold">{{ $inUse }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-lg font-semibold">Under Maintenance</h3>
        <p class="text-3xl font-bold">{{ $underMaintenance }}</p>
    </div>
</div>

<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">Recent Assets</h2>
    <div class="overflow-x-auto"> <!-- Responsive Table Wrapper -->
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 text-left font-semibold">Name</th>
                    <th class="p-3 text-left font-semibold">Serial</th>
                    <th class="p-3 text-left font-semibold">Location</th>
                    <th class="p-3 text-left font-semibold">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentAssets as $asset)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 align-middle">{{ $asset->name }}</td>
                    <td class="p-3 align-middle">{{ $asset->serial_number }}</td>
                    <td class="p-3 align-middle">{{ $asset->location }}</td>
                    <td class="p-3 align-middle">
                        <span class="{{ $asset->status == 'in_use' ? 'text-green-600' : ($asset->status == 'under_maintenance' ? 'text-yellow-600' : 'text-red-600') }}">
                            {{ ucfirst(str_replace('_', ' ', $asset->status)) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="p-3 text-center text-gray-500">No recent assets found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
