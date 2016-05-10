<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevelopObject extends Model
{
    protected $table = 'develop_object';

    public function developer()
	{
		return $this->belongsTo('App\\Developer');
	}
}
