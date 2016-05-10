<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoQuery extends Model
{
    protected $table = 'seo_queries';

    protected $fillable = array(
    	'keyword',
        'position',
        'traffic',
        'cpc',
        'page_id'
    );
}
