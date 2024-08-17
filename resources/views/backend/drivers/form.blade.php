<div class="card-body">
    <div class="row gy-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-label">{{ __("Name") }}</label>
                <input type="text" class="form-control" value="{{ old('name', $driver->name ?? '') }}" name="name" id="name" placeholder="{{ __("Enter name") }}" />
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="code" class="form-label">{{ __("Code") }}</label>
                <input type="text" class="form-control" value="{{ old('code', $driver->code ?? '') }}" name="code" id="code" placeholder="{{ __("Enter code") }}" />
                @error('code')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone" class="form-label">{{ __("Phone") }}</label>
                <input type="tel" class="form-control" value="{{ old('phone', $driver->phone ?? '') }}" name="phone" id="phone" placeholder="{{ __("Enter phone number") }}" />
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-label">{{ __("E-mail") }}</label>
                <input type="email" class="form-control" value="{{ old('email', $driver->email ?? '') }}" name="email" id="email" placeholder="{{ __("Enter email") }}" />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="driving_license_serial" class="form-label">{{ __("Driving License Serial") }}</label>
                <input class="form-control" type="text" value="{{ old('driving_license_serial', $driver->driving_license_serial ?? '') }}" name="driving_license_serial" placeholder="{{ __("Enter driving license serial") }}" id="driving_license_serial" />
                @error('driving_license_serial')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="license_expiry_date" class="form-label">{{ __("License Expiry Date") }}</label>
                <input type="date" class="form-control" value=" {{ old('license_expiry_date', $driver->license_expiry_date ?? '') }}" placeholder="{{ __("Enter license expiry date") }}" name="license_expiry_date" id="license_expiry_date" />
                @error('license_expiry_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="personal_image" class="form-label">{{ __("Personal Image") }}</label>
                <input class="form-control" type="file" value="     {{ old('personal_image', $driver->personal_image ?? '') }}" placeholder="{{ __("Enter personal image") }}" name="personal_image" id="personal_image" />
                @error('personal_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="bus_id" class="form-label">{{ __("Bus_Id") }}</label>
            <input type="number" class="form-control" id="bus_id" value="{{ old('bus_id', $driver->bus_id ?? '') }}" placeholder="{{ __("Enter bus ID") }}" name="bus_id" placeholder="{{ __("Enter bus ID") }}" />
                @error('bus_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="address" class="form-label">{{ __("Address") }}</label>
            <input type="number" class="form-control" id="address" value="{{ old('address', $driver->address ?? '') }}" placeholder="{{ __("Enter Address") }}" name="address" placeholder="{{ __("Enter Address") }}" />
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
