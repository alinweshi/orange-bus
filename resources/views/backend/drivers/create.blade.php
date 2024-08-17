@extends('backend.layouts.app')
@section('content')
<div class="container">
	<!-- Start:: row-1 -->
	<div class="row">
		<div class="col-xl-12">
			<div class="card custom-card">
				<div class="card-header justify-content-between">
					<div class="card-title">
						<h5 style="font-style:bold">{{ __('Add New Driver') }}:</h5>
					</div>
				</div>
				<div class='card-body'>
					<form action="{{ route('driver.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@include('backend.drivers.form')
						<div class="d-flex justify-content-center gap-3 mt-3">
							<a href="{{ route('drivers.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
							<button type="submit" class="btn btn-primary" id="input-submit">{{ __('Add') }}</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop