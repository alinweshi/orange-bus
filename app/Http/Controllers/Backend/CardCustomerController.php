<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\CardCustomerStoreRequest;
use App\Http\Requests\backend\CardCustomerUpdateRequest;
use App\Models\CardCustomer;

class CardCustomerController extends Controller
{
    public function index()
    {
        $cardCustomers = CardCustomer::all();
        return view('backend.card-customers.index', compact('cardCustomers'));
    }

    public function create()
    {

        return view('backend.card-customers.create');
    }

    public function store(CardCustomerStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = $imageName;
        }
        $cardCustomer = CardCustomer::create($data);
        if ($cardCustomer) {
            return redirect()->route('card_customers.index')->with('success', __('Card Customer created successfully'));
        }
        return redirect()->route('card_customers.index')->with('error', __('Card Customer not created successfully.'));
    }
    public function show(CardCustomer $cardCustomer)
    {
        return view('backend.card-customers.show', compact('cardCustomer'));
    }
    public function edit(CardCustomer $cardCustomer)
    {
        return view('backend.card-customers.edit', compact('cardCustomer'));
    }

    public function update(CardCustomerUpdateRequest $request, CardCustomer $cardCustomer)
    {
        $data = $request->validated();
        if ($request->hasFile('personal_image')) {
            $image = $request->file('personal_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['personal_image'] = $imageName;
        }
        if ($cardCustomer->update($data)) {
            return redirect()->route('card_customers.index')->with('success', __('Card Customer updated successfully.'));
        }
        return redirect()->route('card_customers.index')->with('error', __('Card Customer not  updated successfully.'));
    }

    public function destroy(CardCustomer $cardCustomer)
    {
        if ($cardCustomer->delete()) {
            return redirect()->route('card_customers.index')->with('success', __('Card Customer deleted successfully.'));
        }
        return redirect()->route('card_customers.index')->with('error', __('Card Customer not  deleted successfully.'));
    }
}
