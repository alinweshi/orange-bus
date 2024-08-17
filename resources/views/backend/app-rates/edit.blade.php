<!-- resources/views/backend/app-rate/edit.blade.php -->
@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">{{ __('Update Rate') }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('app_rates.update', $appRate->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('backend.app-rates.form')
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="{{ route('app_rates.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection