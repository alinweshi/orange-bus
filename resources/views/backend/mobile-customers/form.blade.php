<!-- In resources/views/backend/mobile-customers/form.blade.php -->
<div class="row gy-4">
    <!-- First Name -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstName" class="form-label">{{ __("First Name") }}</label>
            <input type="text" class="form-control" id="firstName" name="firstName"
                value="{{ old('firstName', $mobileCustomer->firstName ?? '') }}" placeholder="{{ __(" Enter First Name")
                }}" />
            @error('firstName')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- Last Name -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="lastName" class="form-label">{{ __("Last Name") }}</label>
            <input type="text" class="form-control" id="lastName" name="lastName"
                value="{{ old('lastName', $mobileCustomer->lastName ?? '') }}" placeholder="{{ __(" Enter Last Name")
                }}" />
            @error('lastName')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Email -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="email" class="form-label">{{ __("E-mail") }}</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ old('email', $mobileCustomer->email ?? '') }}" placeholder="{{ __(" Enter Email") }}" />
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Phone -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone" class="form-label">{{ __("Phone") }}</label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="{{ old('phone', $mobileCustomer->phone ?? '') }}" placeholder="{{ __(" Enter Phone Number")
                }}" />
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- Password -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="password" class="form-label">{{ __("Password") }}</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="{{ __(" Enter
                Password") }}" />
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- Address -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="address" class="form-label">{{ __("Address") }}</label>
            <textarea class="form-control" id="address" name="address" placeholder="{{ __(" Enter Address")
                }}">{{ old('address', $mobileCustomer->address ?? '') }}</textarea>
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Image -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="image" class="form-label">{{ __("Image") }}</label>
            <input type="file" class="form-control" id="image" name="image" />
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Status -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="status" class="form-label">{{ __("Status") }}</label>
            <select class="form-control" id="status" name="status">
                <option value="" disabled>{{ __("Select Status") }}</option>
                <option value="active" {{ old('status', $mobileCustomer->status ?? '') == 'active' ? 'selected' : ''
                    }}>{{ __("Active") }}</option>
                <option value="inactive" {{ old('status', $mobileCustomer->status ?? '') == 'inactive' ? 'selected' : ''
                    }}>{{ __("Inactive") }}</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Additional Info -->
    <div class="col-md-12">
        <div class="form-group">
            <label for="additionalInfo" class="form-label">{{ __("Additional Info") }}</label>
            <textarea class="form-control" id="additionalInfo" name="additionalInfo" placeholder="{{ __(" Enter
                Additional Info") }}">{{ old('additionalInfo', $mobileCustomer->additionalInfo ?? '') }}</textarea>
            @error('additionalInfo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>