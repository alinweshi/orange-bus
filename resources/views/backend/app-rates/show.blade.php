@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">{{ __('App Rate Details') }}</div>
                </div>
                <div class="card-body">
                    <table class="table text-nowrap table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">{{ __('Field') }}</th>
                                <th scope="col">{{ __('Details') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ __('ID') }}</th>
                                <td>{{ $appRate->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Rateable Type') }}</th>
                                <td>{{ $appRate->rateable_type }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Rateable ID') }}</th>
                                <td>{{ $appRate->rateable_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Rate') }}</th>
                                <td>{{ $appRate->rate }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Comment') }}</th>
                                <td>{{ $appRate->comment }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Created At') }}</th>
                                <td>{{ $appRate->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Updated At') }}</th>
                                <td>{{ $appRate->updated_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('Actions') }}</th>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{ route('app_rates.index') }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                        <a href="{{ route('app_rates.edit', $appRate->id) }}"
                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('app_rates.destroy', $appRate->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"
                                                onclick="return confirm('Are you sure you want to delete this rate?');">
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