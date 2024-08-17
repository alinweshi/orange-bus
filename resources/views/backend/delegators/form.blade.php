<div class="card-body">
    <div class="row gy-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-label">{{ __("Name") }}</label>
                <input type="text" class="form-control" value="{{ old('name', $delegator->name ?? '') }}" name="name"
                    id="name" placeholder="{{ __(" Enter name") }}" />
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="code" class="form-label">{{ __("Code") }}</label>
                <input type="text" class="form-control" value="{{ old('code', $delegator->code ?? '') }}" name="code"
                    id="code" placeholder="{{ __(" Enter code") }}" />
                @error('code')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone" class="form-label">{{ __("Phone") }}</label>
                <input type="tel" class="form-control" value="{{ old('phone', $delegator->phone ?? '') }}" name="phone"
                    id="phone" placeholder="{{ __(" Enter phone number") }}" />
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-label">{{ __("E-mail") }}</label>
                <input type="email" class="form-control" value="{{ old('email', $delegator->email ?? '') }}"
                    name="email" id="email" placeholder="{{ __(" Enter email") }}" />
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="personal_image" class="form-label">{{ __("Personal Image") }}</label>
                <input class="form-control" type="file"
                    value="     {{ old('personal_image', $delegator->personal_image ?? '') }}" placeholder="{{ __("
                    Enter personal image") }}" name="personal_image" id="personal_image" />
                @error('personal_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="address" class="form-label">{{ __("Address") }}</label>
                <input type="number" class="form-control" id="address"
                    value="{{ old('address', $delegator->address ?? '') }}" placeholder="{{ __(" Enter Address") }}"
                    name="address" placeholder="{{ __(" Enter Address") }}" />
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>