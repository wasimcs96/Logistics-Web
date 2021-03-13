<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['id', 'name', 'email', 'primary_phone','primary_number', 'secondary_phone', 'secondary_number','client_notes', 'add_on', 'media', 'job_type', 'price_type', 'payment_method', 'mdate', 'fdate', 'c_building_type', 'c_country', 'c_street', 'c_state', 'c_city', 'c_zip_code', 'c_floor', 'c_sqft', 'c_bedroom', 'c_movers', 'c_trucks', 'p_building_type', 'p_country', 'p_street', 'p_state', 'p_city', 'p_zip_code', 'p_floor', 'p_sqft', 'p_bedroom', 'p_movers', 'p_trucks', 'franchisee_notes', 'source', 'truck_fee', 'hourly_rate', 'fields', 'nda', 'status', 'created_at', 'updated_at'];
}
