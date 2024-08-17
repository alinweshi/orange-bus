<div class="card-body">
    <div class="row gy-4">
        <!-- First Name -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstName" class="form-label">{{ __("First Name") }}</label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                    value="{{ old('firstName', $cardCustomer->firstName ?? '') }}" placeholder="{{ __(" Enter First
                    Name") }}" />
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
                    value="{{ old('lastName', $cardCustomer->lastName ?? '') }}" placeholder="{{ __(" Enter Last Name")
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
                    value="{{ old('email', $cardCustomer->email ?? '') }}" placeholder="{{ __(" Enter Email") }}" />
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
                    value="{{ old('phone', $cardCustomer->phone ?? '') }}" placeholder="{{ __(" Enter Phone Number")
                    }}" />
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Address -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="address" class="form-label">{{ __("Address") }}</label>
                <textarea class="form-control" id="address" name="address" placeholder="{{ __(" Enter Address")
                    }}">{{ old('address', $cardCustomer->address ?? '') }}</textarea>
                @error('address')
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
                    <option value="" disabled selected>{{ __("Select Status") }}</option>
                    <option value="active" {{ old('status', $cardCustomer->status ?? '') == 'active' ? 'selected' : ''
                        }}>
                        {{ __("Active") }}
                    </option>
                    <option value="inactive" {{ old('status', $cardCustomer->status ?? '') == 'inactive' ? 'selected' :
                        '' }}>
                        {{ __("Inactive") }}
                    </option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Type -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardType" class="form-label">{{ __("Card Type") }}</label>
                <select class="form-control" id="cardType" name="cardType">
                    <option value="" disabled selected>{{ __("Select Card Type") }}</option>
                    <option value="gold" {{ old('cardType', $cardCustomer->cardType ?? '') == 'gold' ? 'selected' : ''
                        }}>
                        {{ __("Gold") }}
                    </option>
                    <option value="silver" {{ old('cardType', $cardCustomer->cardType ?? '') == 'silver' ? 'selected' :
                        '' }}>
                        {{ __("Silver") }}
                    </option>
                    <option value="platinum" {{ old('cardType', $cardCustomer->cardType ?? '') == 'platinum' ?
                        'selected' : '' }}>
                        {{ __("Platinum") }}
                    </option>
                </select>
                @error('cardType')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Number -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardNumber" class="form-label">{{ __("Card Number") }}</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber"
                    value="{{ old('cardNumber', $cardCustomer->cardNumber ?? '') }}" placeholder="{{ __(" Enter Card
                    Number") }}" />
                @error('cardNumber')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Expiry Date -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardExpiryDate" class="form-label">{{ __("Card Expiry Date") }}</label>
                <input type="date" class="form-control" id="cardExpiryDate" name="cardExpiryDate"
                    value="{{ old('cardExpiryDate', $cardCustomer->cardExpiryDate ?? '') }}" />
                @error('cardExpiryDate')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card CVV -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardCVV" class="form-label">{{ __("Card CVV") }}</label>
                <input type="text" class="form-control" id="cardCVV" name="cardCVV"
                    value="{{ old('cardCVV', $cardCustomer->cardCVV ?? '') }}" placeholder="{{ __(" Enter Card CVV")
                    }}" />
                @error('cardCVV')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Issue Date -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardIssueDate" class="form-label">{{ __("Card Issue Date") }}</label>
                <input type="date" class="form-control" id="cardIssueDate" name="cardIssueDate"
                    value="{{ old('cardIssueDate', $cardCustomer->cardIssueDate ?? '') }}" />
                @error('cardIssueDate')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Balance -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardBalance" class="form-label">{{ __("Card Balance") }}</label>
                <input type="text" class="form-control" id="cardBalance" name="cardBalance"
                    value="{{ old('cardBalance', $cardCustomer->cardBalance ?? '') }}" placeholder="{{ __(" Enter Card
                    Balance") }}" />
                @error('cardBalance')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Card Limit -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="cardLimit" class="form-label">{{ __("Card Limit") }}</label>
                <input type="text" class="form-control" id="cardLimit" name="cardLimit"
                    value="{{ old('cardLimit', $cardCustomer->cardLimit ?? '') }}" placeholder="{{ __(" Enter Card
                    Limit") }}" />
                @error('cardLimit')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- Additional Info -->
        <div class="col-md-12">
            <div class="form-group">
                <label for="additionalInfo" class="form-label">{{ __("Additional Info") }}</label>
                <textarea class="form-control" id="additionalInfo" name="additionalInfo" placeholder="{{ __(" Enter
                    Additional Info") }}">{{ old('additionalInfo', $cardCustomer->additionalInfo ?? '') }}</textarea>
                @error('additionalInfo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>