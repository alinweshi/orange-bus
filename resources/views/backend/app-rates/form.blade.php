<!-- Rate -->
<div class="form-group mb-3">
    <label for="rate" class="form-label">{{ __('Rate') }}</label>
    <input type="number" class="form-control" id="rate" name="rate" value="{{ old('rate',$appRate->rate ?? '') }}"
        min="1" max="5" required />
    @error('rate')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Comment -->
<div class="form-group mb-3">
    <label for="comment" class="form-label">{{ __('Comment') }}</label>
    <textarea class="form-control" id="comment" name="comment">{{ old('comment',$appRate->comment ?? '') }}</textarea>
    @error('comment')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Rateable ID -->
<div class="form-group mb-3">
    <label for="rateable_id" class="form-label">{{ __('Customer Id') }}</label>
    <input type="number" class="form-control" id="rateable_id" name="rateable_id"
        value="{{ old('rateable_id',$appRate->rateable_id ?? '') }}" required />
    @error('rateable_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Rateable Type -->
<div class="form-group mb-3">
    <label for="rateable_type" class="form-label">{{ __('Customer Type') }}</label>
    <select class="form-control" id="rateable_type" name="rateable_type" required>
        <option value="" disabled selected>{{ old('rateable_type', $appRate->rateable_type ?? '') == 'MobileCustomer' ?
            'selected' : '' }}</option>
        <option value="MobileCustomer" {{ old('rateable_type', $appRate->rateable_type ?? '') == 'MobileCustomer' ?
            'selected' : '' }}>
            {{ __('Mobile Customer') }}
        </option>
        <option value="CardCustomer" {{ old('rateable_type', $appRate->rateable_type ?? '') == 'CardCustomer' ?
            'selected' : '' }}>
            {{ __('Card Customer') }}
        </option>
    </select>
    @error('rateable_type')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>