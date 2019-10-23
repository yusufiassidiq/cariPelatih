<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassUser extends Model
{

    protected $fillable = [
        'ClassUser',
    ];
    
    public function users(){
	  return $this->hasMany('App\User');
	}
}
