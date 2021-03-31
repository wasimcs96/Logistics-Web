<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckDriver extends Model
{
    protected $fillable = ['truck_id', 'quote_id', 'pick_address', 'drop_address', 'date', 'status'];
}
