<?php

namespace App;
use App\Userinfo;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'state', 'city'
    ];
    
  
}
