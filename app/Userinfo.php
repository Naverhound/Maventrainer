<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //
    protected $fillable = [
        'user_id', 'name', 'lastname','img'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
