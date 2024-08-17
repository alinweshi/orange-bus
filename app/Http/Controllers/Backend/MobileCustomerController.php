<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreMobileCustomerRequest;
use App\Http\Requests\Backend\UpdateMobileCustomerRequest;
use App\Models\MobileCustomer;

class MobileCustomerController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $mobileCustomers = MobileCustomer::latest()->paginate(10);
        return view('backend.mobile-customers.index', compact('mobileCustomers'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('backend.mobile-customers.create');
    }

    // Store a newly created resource in storage.
    public function store(StoreMobileCustomerRequest $request)
    {
        MobileCustomer::create($request->validated());
        return redirect()->route('mobile_customers.index')->with('success', 'Customer created successfully.');
    }

    // Display the specified resource.
    public function show(MobileCustomer $mobileCustomer)
    {
        return view('backend.mobile-customers.show', compact('mobileCustomer'));
    }

    // Show the form for editing the specified resource.
    public function edit(MobileCustomer $mobileCustomer)
    {
        return view('backend.mobile-customers.edit', compact('mobileCustomer'));
    }

    // Update the specified resource in storage.
    public function update(UpdateMobileCustomerRequest $request, MobileCustomer $mobileCustomer)
    {
        $mobileCustomer->update($request->validated());
        return redirect()->route('mobile_customers.index')->with('success', __('Customer updated successfully.'));
    }

    // Remove the specified resource from storage.
    public function destroy(MobileCustomer $mobileCustomer)
    {
        $mobileCustomer->delete();
        return redirect()->route('mobile_customers.index')->with('success', __('Customer deleted successfully.'));
    }
}
