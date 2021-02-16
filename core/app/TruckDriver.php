<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckDriver extends Model
{
    protected $fillable = ['truck_id', 'user_id', 'order_id', 'pick_address', 'drop_address', 'date', 'status'];
}
