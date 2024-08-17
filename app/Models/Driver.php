<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = ["id", "code", "name", "phone", "email", "driving_license_serial", "license_expiry_date", "personal_image", "bus_id", "address", "status", "created_at", "updated_at"];
}
