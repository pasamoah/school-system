<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $primaryKey = 'staff_id';

    public function salaries()
 	{
 		return $this->hasMany('Salary::class');
 	}

 	public function leaves()
 	{
 		return $this->hasMany('Leave::class');
 	}
}
