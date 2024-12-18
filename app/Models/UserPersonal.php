<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPersonal extends Model
{
    public function events(){
        return $this->hasMany('App\Models\UserEvent','event_id','id');
    }

    public function advances(){
        return $this->hasMany('App\Models\Advance','event_id','id');
    }
}
