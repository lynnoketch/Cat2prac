<?php

namespace App;
use App\Fees;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function fee()
    {
    	return $this->hasMany('App\Review');
    }
}
