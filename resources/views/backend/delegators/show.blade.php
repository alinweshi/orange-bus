@extends("backend.layouts.app")
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">{{ __("Delegator Details") }}</div>
            </div>
            <div class="card-body">
                <table class="table text-nowrap table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">{{ __("Delegator") }}</th>
                            <th scope="col">{{ __("Details") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ __("Id") }}</th>
                            <td>{{ $delegator->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Name") }}</th>
                            <td>{{ $delegator->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Phone") }}</th>
                            <td>{{ $delegator->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("E-mail") }}</th>
                            <td>{{ $delegator->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Personal Image") }}</th>
                            <td><img src="{{ $delegator->personal_image }}" alt="{{ $delegator->name }}" width="50">
                            </td>
                        <tr>
                            <th scope="row">Created At</th>
                            <td>{{ $delegator->created_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated At</th>
                            <td>{{ $delegator->updated_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __("Action") }}</th>
                            <td>
                                <div class="block" style="margin-top: 10px;">
                                    <a href="{{ route('delegators.index') }}"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill"
                                        style="margin-left: 10px;">
                                        <i class="ri-arrow-left-line"></i>
                                    </a>
                                    <a href="{{ route('delegators.edit', $delegator->id) }}"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <form action="{{ route('delegators.destroy', $delegator->id) }}" method="POST"
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