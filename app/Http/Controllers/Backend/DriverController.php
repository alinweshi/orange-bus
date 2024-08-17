<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DriverStoreRequest;
use App\Http\Requests\Backend\DriverUpdateRequest;
use App\Models\Driver;

class DriverController extends Controller
{
    /**. k; l;87                                                         vvvvvvvvvvvvvvvvvvvvvvvvvvv
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();
        return view("backend.drivers.index", compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DriverStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = $imageName;
        }
        $driver = Driver::create($data);
        if ($driver) {
            return redirect()->route('drivers.index')->with('success', __('Driver created successfully'));

        }
        return redirect()->route('drivers.index')->with('error', 'Driver not created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view('backend.drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('backend.drivers.edit', compact("driver"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DriverUpdateRequest $request, Driver $driver)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = ('images/') . $imageName;
            $driver->update($data);
        }
        if ($driver) {
            return redirect()->route('drivers.index')->with('success', __('Driver updated successfully'));
        }
        return redirect()->route('drivers.index')->with('error', __('Driver not updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        if ($driver) {
            $driver->delete();
            return redirect()->route('drivers.index')->with('success', __('Driver deleted successfully'));
        }
        return redirect()->route('drivers.index')->with('error', __('Driver not found'));
    }
}
