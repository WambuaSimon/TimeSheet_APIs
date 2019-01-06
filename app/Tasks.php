<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
    'email','date','start_time','end_time','project','task'
    ];
}
