<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function agency()
    {
    	return $this->belongsTo('App\\Agency');
    }

    public function mediaPlatform()
    {
    	return $this->belongsTo('App\\MediaPlatform');
    }
}
