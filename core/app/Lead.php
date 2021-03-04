<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['first_name','last_name','phone_number','client_email','move_data','moving_from','moving_to'];
}
