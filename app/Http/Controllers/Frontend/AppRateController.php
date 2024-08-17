<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StoreAppRateRequest;
use App\Http\Requests\Frontend\UpdateAppRateRequest;
use App\Models\AppRate;

class AppRateController extends Controller
{
    public function index()
    {
        // Retrieve the rating from the database or perform any other logic here
        $rates = AppRate::all();
        return response()->json(['rating' => $rates]); // Example rating
    }
    public function average()
    {
        $rates = AppRate::all()->avg('rate');
        return response()->json(['rating' => $rates]); // Example rating
    }
    public function create(StoreAppRateRequest $request)
    {
        $data = $request->validated();
        $customerId = $request->input('customer_id');
        $customerType = $request->input('customer_type'); // should be 'CardCustomer' or 'MobileCustomer'

        // Assuming you've validated that these inputs exist and are valid
        $customerModel = 'App\Models\\' . $customerType; // Full namespace of the model
        $customer = $customerModel::findOrFail($customerId);

        // Set the polymorphic relationship
        $rate = new AppRate($data);
        $rate->rateable_type = $customerType; // Set the correct rateable_type
        $rate->rateable_id = $customerId; // Set the correct rateable_id        $rate->save();
        $rate->save();
        if ($rate) {
            return response()->json(['message' => __('Rating submitted successfully')]);
        }
        return response()->json(['message' => __('Something went wrong')]);
    }
    public function show($id)
    {
        $rate = AppRate::find($id);
        if ($rate) {
            return response()->json(['rating' => $rate]);
        }
        return response()->json(['message' => __('Something went wrong')]);
    }
    public function update(UpdateAppRateRequest $request, $id)
    {
        $data = $request->validated();

        // Fetch the existing AppRate instance
        $rate = AppRate::findOrFail($id);

        // Update the fields that were provided in the request
        if (isset($data['rate'])) {
            $rate->rate = $data['rate'];
        }
        if (isset($data['comment'])) {
            $rate->comment = $data['comment'];
        }

        // Save the updated record
        $rate->save();

        if ($rate) {
            return response()->json(['message' => __('Rating updated successfully')]);
        }

        return response()->json(['message' => __('Something went wrong')]);
    }

    public function delete($id)
    {
        $rate = AppRate::find($id);
        if ($rate) {
            $rate->delete();
            return response()->json(['message' => __('Rating deleted successfully')]);
        }
        return response()->json(['message' => __('Something went wrong')]);
    }
}
