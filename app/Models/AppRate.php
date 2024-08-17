<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'rateable_id',
        'rateable_type',
        'rate',
        'comment',
        'created_at',
        'updated_at',
    ];
    public function rateable()
    {
        return $this->morphTo();
    }
}
