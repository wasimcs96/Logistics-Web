<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = ['truck_number', 'company_name', 'load_weight'];
}
