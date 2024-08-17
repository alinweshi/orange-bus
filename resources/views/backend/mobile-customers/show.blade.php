@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">{{ __("Mobile Customer Details") }}</div>
                </div>
                <div class="card-body">
                    <table class="table text-nowrap table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">{{ __("Mobile Customer") }}</th>
                                <th scope="col">{{ __("Details") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{ __("Id") }}</th>
                                <td>{{ $mobileCustomer->id }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("First Name") }}</th>
                                <td>{{ $mobileCustomer->firstName }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Last Name") }}</th>
                                <td>{{ $mobileCustomer->lastName }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Email") }}</th>
                                <td>{{ $mobileCustomer->email }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Phone") }}</th>
                                <td>{{ $mobileCustomer->phone }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Address") }}</th>
                                <td>{{ $mobileCustomer->address }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Status") }}</th>
                                <td>{{ $mobileCustomer->status }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Created At") }}</th>
                                <td>{{ $mobileCustomer->created_at }}</td>
                            </tr>
                            <tr>
                                <th>{{ __("Updated At") }}</th>
                                <td>{{ $mobileCustomer->updated_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Action") }}</th>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{ route('mobile_customers.index') }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                        <a href="{{ route('mobile_customers.edit', $mobileCustomer->id) }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('mobile_customers.destroy', $mobileCustomer->id) }}"
                                            method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"
                                                onclick="return confirm('Are you sure you want to delete this customer?');">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection