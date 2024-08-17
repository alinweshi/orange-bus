@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">{{ __("Bus Details") }}</div>
                </div>
                <div class="card-body">
                    <table class="table text-nowrap table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">{{ __("Bus") }}</th>
                                <th scope="col">{{ __("Details") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ __("ID") }}</th>
                                <td>{{ $bus->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("GPS Bus ID") }}</th>
                                <td>{{ $bus->gps_bus_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Name") }}</th>
                                <td>{{ $bus->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Latitude") }}</th>
                                <td>{{ $bus->latitude }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Longitude") }}</th>
                                <td>{{ $bus->longitude }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Current Station ID") }}</th>
                                <td>{{ $bus->current_station_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Current Station Name") }}</th>
                                <td>{{ $bus->current_station_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Next Station Name") }}</th>
                                <td>{{ $bus->next_station_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Next Station ID") }}</th>
                                <td>{{ $bus->next_station_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Near Map Line Point ID") }}</th>
                                <td>{{ $bus->near_map_line_point_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Time Location Change") }}</th>
                                <td>{{ $bus->time_location_change }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Trip ID") }}</th>
                                <td>{{ $bus->trip_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Status") }}</th>
                                <td>{{ $bus->status }}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{ __("Action") }}</th>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{ route('buses.index') }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                        <a href="{{ route('buses.edit', $bus->id) }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"
                                                onclick="return confirm('Are you sure you want to delete this service?');">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <!-- Add more fields if necessary -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection