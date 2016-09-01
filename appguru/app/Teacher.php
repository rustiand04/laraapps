<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','date','address'];

    protected $casts = [
    	'user_id' => 'int',
    ];
}
