<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diff extends Model
{
	protected $table = 'diff';

    public function page() {
    	return $this->belongsTo('App\\DevelopObjectPage');
    }
}
