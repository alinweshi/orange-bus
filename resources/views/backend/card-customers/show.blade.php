@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">{{ __("Card Customer Details") }}</div>
                </div>
                <div class="card-body">
                    <table class="table text-nowrap table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">{{ __("Card Customer") }}</th>
                                <th scope="col">{{ __("Details") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ __("First Name") }}</th>
                                <td>{{ $cardCustomer->firstName }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Last Name") }}</th>
                                <td>{{ $cardCustomer->lastName }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Email") }}</th>
                                <td>{{ $cardCustomer->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Phone") }}</th>
                                <td>{{ $cardCustomer->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Address") }}</th>
                                <td>{{ $cardCustomer->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Type") }}</th>
                                <td>{{ $cardCustomer->cardType }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Number") }}</th>
                                <td>{{ $cardCustomer->cardNumber }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Expiry Date") }}</th>
                                <td>{{ $cardCustomer->cardExpiryDate }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card CVV") }}</th>
                                <td>{{ $cardCustomer->cardCVV }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Issue Date") }}</th>
                                <td>{{ $cardCustomer->cardIssueDate }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Balance") }}</th>
                                <td>{{ $cardCustomer->cardBalance }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Limit") }}</th>
                                <td>{{ $cardCustomer->cardLimit }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Card Status") }}</th>
                                <td>{{ $cardCustomer->cardStatus }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __("Action") }}</th>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{ route('card_customers.index') }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                        <a href="{{ route('card_customers.edit', $cardCustomer->id) }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('card_customers.destroy', $cardCustomer->id) }}"
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
                            <!-- Add more fields if necessary -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection