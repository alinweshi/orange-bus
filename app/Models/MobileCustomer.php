<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileCustomer extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'address',
        'password',
        'image',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $table = 'mobile_customers';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d',
    ];
    // protected $table = 'mobile_customers';
    protected $hidden = [
        'password',
    ];
    public function rate()
    {
        return $this->morphOne(AppRate::class, 'rateable');
    }
    public function getFullNameAttribute()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
    public function getUpdatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
    public function getDeletedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
    public function getPhoneAttribute($value)
    {
        return '0' . $value;
    }

}
