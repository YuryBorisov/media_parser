<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvFact extends Model
{
    protected $table = 'tv_fact';

    public function developObject() {
    	return $this->belongsTo('App\\DevelopObject');
    }
}
