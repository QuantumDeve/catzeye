<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public function employee()
    {
    	return $this->hasOne('App\Model\Employee','id','emp_id');
    }
}
