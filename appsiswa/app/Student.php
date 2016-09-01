<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','date','address'];

    protected $casts = [
    	'user_id' => 'int',
    ];
}
