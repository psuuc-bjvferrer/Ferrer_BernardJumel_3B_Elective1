<?php
namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::orderBy('serial_number', 'asc')->get(); // Sort in ascending order
        return view('assets.index', compact('assets'));
    }

    public function create()
    {
        return view('assets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'serial_number' => 'required|unique:assets',
            'location' => 'required',
            'status' => 'required|in:in_use,under_maintenance,retired',
            'description' => 'required',
        ]);

        Asset::create($request->all());
        return redirect()->route('assets.index')->with('success', 'Asset added successfully');
    }

    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    public function edit(Asset $asset)
    {
        return view('assets.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'name' => 'required',
            'serial_number' => 'required|unique:assets,serial_number,' . $asset->id,
            'location' => 'required',
            'status' => 'required|in:in_use,under_maintenance,retired',
            'description' => 'required',
        ]);

        $asset->update($request->all());
        return redirect()->route('assets.index')->with('success', 'Asset updated successfully');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully');
    }

    public function dashboard()
{
    $totalAssets = Asset::count();
    $inUse = Asset::where('status', 'in_use')->count();
    $underMaintenance = Asset::where('status', 'under_maintenance')->count();

    $recentAssets = Asset::orderBy('created_at', 'desc')->take(5)->get();

    return view('dashboard', compact('totalAssets', 'inUse', 'underMaintenance', 'recentAssets'));
}

}
