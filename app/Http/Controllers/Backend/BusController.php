<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\BusStoreRequest;
use App\Http\Requests\Backend\BusUpdateRequest;
use App\Models\Bus;
use Illuminate\Routing\Controller;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::all();
        return view('backend.buses.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusStoreRequest $request)
    {
        $bus = Bus::create($request->validated());
        if ($bus) {
            return redirect()->route('buses.index')->with('success', __('Bus created successfully'));
        }
        return redirect()->route('buses.index')->with('error', __('Bus not created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        return view('backend.buses.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        return view('backend.buses.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusUpdateRequest $request, Bus $bus)
    {
        $bus->update($request->validated());
        if ($bus) {
            return redirect()->route('buses.index')->with('success', __('Bus updated successfully'));
        }
        return redirect()->route('buses.index')->with('error', __('Bus not updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        if ($bus->delete()) {
            return redirect()->route('buses.index')->with('success', __('Bus deleted successfully'));
        }
        return redirect()->route('buses.index')->with('error', __('Bus not deleted'));
    }
}
