<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
	protected $primaryKey = 'std_id';


	public function getRouteKeyName(){

		return 'surname';
	}

	

	public function users()
 	{
 		return $this->belongsTo('User::class');
 	}

 	public function payments()
 	{
 		return $this->hasMany('Payment::class');
 	}


 	 	public function results()
 	{
 		return $this->hasMany('Result::class');
 	}

}
