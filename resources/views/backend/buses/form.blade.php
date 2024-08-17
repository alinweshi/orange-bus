<div class="card-body">
    <div class="row gy-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="gps_bus_id" class="form-label">{{ __("GPS Bus ID") }}</label>
                <input type="text" class="form-control" id="gps_bus_id" name="gps_bus_id"
                    value="{{ old('gps_bus_id', $bus->gps_bus_id ?? '') }}" placeholder="{{ __(" Enter GPS Bus ID")
                    }}" />
                @error('gps_bus_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-label">{{ __("Name") }}</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $bus->name ?? '') }}" placeholder="{{ __(" Enter name") }}" />
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="latitude" class="form-label">{{ __("Latitude") }}</label>
                <input type="text" class="form-control" id="latitude" name="latitude"
                    value="{{ old('latitude', $bus->latitude ?? '') }}" placeholder="{{ __(" Enter latitude") }}" />
                @error('latitude')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="longitude" class="form-label">{{ __("Longitude") }}</label>
                <input type="text" class="form-control" id="longitude" name="longitude"
                    value="{{ old('longitude', $bus->longitude ?? '') }}" placeholder="{{ __(" Enter longitude") }}" />
                @error('longitude')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="current_station_id" class="form-label">{{ __("Current Station ID") }}</label>
                <input type="text" class="form-control" id="current_station_id" name="current_station_id"
                    value="{{ old('current_station_id', $bus->current_station_id ?? '') }}" placeholder="{{ __(" Enter
                    current station ID") }}" />
                @error('current_station_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="current_station_name" class="form-label">{{ __("Current Station Name") }}</label>
                <input type="text" class="form-control" id="current_station_name" name="current_station_name"
                    value="{{ old('current_station_name', $bus->current_station_name ?? '') }}" placeholder="{{ __("
                    Enter current station name") }}" />
                @error('current_station_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="next_station_name" class="form-label">{{ __("Next Station Name") }}</label>
                <input type="text" class="form-control" id="next_station_name" name="next_station_name"
                    value="{{ old('next_station_name', $bus->next_station_name ?? '') }}" placeholder="{{ __(" Enter
                    next station name") }}" />
                @error('next_station_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="next_station_id" class="form-label">{{ __("Next Station ID") }}</label>
                <input type="text" class="form-control" id="next_station_id" name="next_station_id"
                    value="{{ old('next_station_id', $bus->next_station_id ?? '') }}" placeholder="{{ __(" Enter next
                    station ID") }}" />
                @error('next_station_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="near_map_line_point_id" class="form-label">{{ __("Near Map Line Point ID") }}</label>
                <input type="number" class="form-control" id="near_map_line_point_id" name="near_map_line_point_id"
                    value="{{ old('near_map_line_point_id', $bus->near_map_line_point_id ?? '') }}" placeholder="{{ __("
                    Enter near map line point ID") }}" />
                @error('near_map_line_point_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="time_location_change" class="form-label">{{ __("Time Location Change") }}</label>
                <input type="text" class="form-control" id="time_location_change" name="time_location_change"
                    value="{{ old('time_location_change', $bus->time_location_change ?? '') }}" placeholder="{{ __("
                    Enter time location change") }}" />
                @error('time_location_change')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="trip_id" class="form-label">{{ __("Trip ID") }}</label>
                <input type="text" class="form-control" id="trip_id" name="trip_id"
                    value="{{ old('trip_id', $bus->trip_id ?? '') }}" placeholder="{{ __(" Enter trip ID") }}" />
                @error('trip_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="status" class="form-label">{{ __("Status") }}</label>
                <select class="form-control" id="status" name="status">
                    <option value="" disabled selected>{{ __("Select status") }}</option>
                    <option value="active" {{ old('status', $bus->status ?? '') == 'active' ? 'selected' : '' }}>
                        {{ __("Active") }}
                    </option>
                    <option value="non-active" {{ old('status', $bus->status ?? '') == 'non-active' ? 'selected' : ''
                        }}>
                        {{ __("Non-Active") }}
                    </option>
                    <!-- Add more statuses if needed -->
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>