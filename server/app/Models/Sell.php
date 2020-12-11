<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $guarded = [
        'id'
    ];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    ];
}
