<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutdoorFact extends Model
{
    protected $table = 'outdoor_fact';

    public function outdoorBannerFormat()
    {
    	return $this->belongsTo('App\\OutdoorBannerFormat', 'banner_format_id');
    }

    public function developObject()
    {
    	return $this->belongsTo('App\\DevelopObject', 'develop_object_id');
    }


}
