<?php

namespace App;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function students()
    {
    	return $this->belongsTo('App\Student');
    }
}
