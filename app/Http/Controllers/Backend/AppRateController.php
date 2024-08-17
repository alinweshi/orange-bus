<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreAppRateRequest;
use App\Http\Requests\Backend\UpdateAppRateRequest;
use App\Models\AppRate;
use Illuminate\Http\Request;

class AppRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rates = AppRate::all();
        return view('backend.app-rates.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app-rates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppRateRequest $request)
    {
        $rate = new AppRate($request->only(['rate', 'comment']));
        $rate->rateable_id = $request->input('rateable_id');
        $rate->rateable_type = $request->input('rateable_type');
        $rate->save();

        return redirect()->route('app_rates.index')->with('success', __('Rating created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(AppRate $appRate)
    {
        return view('backend.app-rates.show', compact('appRate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppRate $appRate)
    {
        return view('backend.app-rates.edit', compact('appRate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppRateRequest $request, AppRate $appRate)
    {

        $appRate->update($request->only(['rate', 'comment']));

        return redirect()->route('app_rates.index')->with('success', __('Rating updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppRate $appRate)
    {
        $appRate->delete();

        return redirect()->route('app_rates.index')->with('success', __('Rating deleted successfully'));
    }
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (is_array($ids)) {
            AppRate::destroy($ids);
            return redirect()->route('app_rates.index')->with('success', __('Selected rates deleted successfully'));

        }
        return redirect()->route('app_rates.index')->with('success', __('No rates selected'));
    }

}
