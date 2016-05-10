<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutdoorBannerFormat extends Model
{
	protected $table = 'outdoor_banner_format';

    public function outdoorContractor()
    {
    	return $this->belongsTo('App\\OutdoorContractor');
    }

    public function getFullNameAttribute()
	{
		return $this->outdoorContractor()->first()->getAttribute('name') . " " . $this->getAttribute('name');
	}
}
