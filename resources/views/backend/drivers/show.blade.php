@extends("backend.layouts.app")
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">{{ __("Driver Details") }}</div>
            </div>
            <div class="card-body">
                <table class="table text-nowrap table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">{{ __("Driver") }}</th>
                            <th scope="col">{{ __("Details") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ __("Id") }}</th>
                            <td>{{ $driver->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Name") }}</th>
                            <td>{{ $driver->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Bus-Id") }}</th>
                            <td>{{ $driver->bus_id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Phone") }}</th>
                            <td>{{ $driver->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("E-mail") }}</th>
                            <td>{{ $driver->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Personal Image") }}</th>
                            <td><img src="{{ $driver->personal_image }}" alt="{{ $driver->name }}" width="50">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Driving License Serial") }}</th>
                            <td>{{ $driver->driving_license_serial }}</td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Created At</th>
                            <td>{{ $driver->created_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated At</th>
                            <td>{{ $driver->updated_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Action") }}</th>
                            <td>
                                <div class="block" style="margin-top: 10px;">
                                    <a href="{{ route('drivers.index') }}"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"
                                        style="margin-left: 10px;">
                                        <i class="ri-arrow-left-line"></i>
                                    </a>
                                    <a href="{{ route('drivers.edit', $driver->id) }}"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST"
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
                        <!-- Add more fields as necessary -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection