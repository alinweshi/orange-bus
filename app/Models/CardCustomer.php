<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCustomer extends Model
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
        'cardType',
        'cardNumber',
        'cardExpiryDate',
        'cardCVV',
        'cardIssueDate',
        'cardBalance',
        'cardLimit',
        'cardStatus',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function rate()
    {
        return $this->morphOne(AppRate::class, 'rateable');
    }

    protected $hidden = [
        'password',
    ];
}
