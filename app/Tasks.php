<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    // protected $table = 'tasks';
    protected $fillable = [
    'email','date','start_time','end_time','project','task'
    ];

    public function users(){
        return $this->public function user()
        {
            return $this->belongsTo('App\User', 'user_id');
        }
    }
}
