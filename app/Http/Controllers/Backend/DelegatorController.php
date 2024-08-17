<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DelegatorStoreRequest;
use App\Http\Requests\Backend\DelegatorUpdateRequest;
use App\Models\delegator;
use Illuminate\Http\Request;

class DelegatorController extends Controller
{
    /**. k; l;87                                                         vvvvvvvvvvvvvvvvvvvvvvvvvvv
     * Display a listing of the resource.
     */
    public function index()
    {
        $delegators = Delegator::all();
        return view('backend.delegators.index', compact('delegators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.delegators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DelegatorStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = $imageName;
        }
        $delegator = Delegator::create($data);
        if ($delegator) {
            return redirect()->route('delegators.index')->with('success', __('delegator created successfully'));

        }
        return redirect()->route('delegators.index')->with('error', 'delegator not created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Delegator $delegator)
    {
        return view('backend.delegators.show', compact('delegator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delegator $delegator)
    {
        return view('backend.delegators.edit', compact("delegator"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DelegatorUpdateRequest $request, Delegator $delegator)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = ('images/') . $imageName;
            $delegator->update($data);
        }
        if ($delegator) {
            return redirect()->route('delegators.index')->with('success', __('delegator updated successfully'));
        }
        return redirect()->route('delegators.index')->with('error', __('delegator not updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delegator $delegator)
    {
        if ($delegator) {
            $delegator->delete();
            return redirect()->route('delegators.index')->with('success', __('delegator deleted successfully'));
        }
        return redirect()->route('delegators.index')->with('error', __('delegator not found'));
    }
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (is_array($ids) && !empty($ids)) {
            Delegator::whereIn('id', $ids)->delete();
            return redirect()->route('delegators.index')->with('success', __('delegator deleted successfully'));
        }

        return redirect()->route('delegators.index')->with('error', __('delegator not found'));
    }

}
