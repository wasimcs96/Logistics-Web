<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileItem extends Model
{
    protected $fillable = ['claims_id','description','photo','damage_desc'];
}
