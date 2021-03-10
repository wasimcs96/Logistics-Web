<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
                'first_name',
                'last_name',
                'home_phone',
                'mobile_phone',
                'other_phone',
                'address',
                'city',
                'province',
                'postal_code',
                'email',
                'move_date',
                'order_number',
                'additional_information'
                                ];
}