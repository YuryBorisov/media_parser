<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direct extends Model
{
    protected $table = 'direct';


    protected $fillable = array('page_id', 'concurents', 'cpc', 'header', 'position', 'query', 'shows', 'text', 'traffic');

    public function page() {
    	return $this->belongsTo('App\\DevelopObjectPage');
    }
}
