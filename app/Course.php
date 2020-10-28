<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_code';

    public $incrementing = false;

    public function questions()
 	{
 		return $this->hasMany('Question::class');
 	}
}
