<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'payment_method',
        'date',
        'notes',
    ];
}
