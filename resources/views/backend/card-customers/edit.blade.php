@extends('backend.layouts.app')
@section('content')
<div class="container">
    <!-- Start:: row-1 -->
    <div class="car">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">{{ __('Update Card Customer') }}:</div>
                </div>
                <div class='card-body'>
                    <form action="{{ route('card_customers.update', $cardCustomer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        @include('backend.card-customers.form')
                        <!-- Include your form fields here -->

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="{{ route('card_customers.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                            <button type="submit" class="btn btn-primary" id="input-submit">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@stop