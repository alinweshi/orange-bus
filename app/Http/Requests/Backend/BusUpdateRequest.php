<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BusUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gps_bus_id' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'current_station_id' => 'required|string|max:100',
            'current_station_name' => 'required|string|max:100',
            'next_station_name' => 'nullable|string|max:100',
            'next_station_id' => 'nullable|string|max:100',
            'near_map_line_point_id' => 'required|integer',
            'time_location_change' => 'required|string|max:100',
            'trip_id' => 'required|string|max:100',
            'status' => 'required|string|max:100',
        ];
    }
}
