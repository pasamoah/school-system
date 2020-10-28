<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     public function courses()
 	{
 		return $this->belongsTo('Course::class');
 	}


 	public function next()
		{
		    return static::where($this->getKeyName(), '>', $this->getKey())->first();
		}
}
