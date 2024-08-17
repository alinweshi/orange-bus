<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegator extends Model
{
    use HasFactory;
    protected $fillable = ["id", "code", "name", "phone", "email", "personal_image", "address", "status", "created_at", "updated_at"];
}
