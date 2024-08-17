@extends('backend.layouts.app')
@section('content')
<div class="container">
    <!-- Start:: row-1 -->
    <div class="car">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">{{ __('Update Driver') }}:</div>
                </div>
                <div class='card-body'>
                    <form action="{{ route('drivers.update', $driver->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        @include('backend.drivers.form')
                        <!-- Include your form fields here -->

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="{{ route('drivers.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                            <button type="submit" class="btn btn-primary" id="input-submit">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
{{-- <style>
    /* Custom CSS for the driver form */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 0.25rem;
        border: 1px solid #ced4da;
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
    }

    #input-submit {
        margin-top: 1.5rem;
        padding: 0.75rem 2rem;
        font-size: 1rem;
    }

    .card {
        margin: 2rem 0;
        border: 1px solid #e3e3e3;
        border-radius: 0.5rem;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e3e3e3;
        padding: 1rem 1.5rem;
        font-size: 1.5rem;
    }

    .custom-card {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style> --}}