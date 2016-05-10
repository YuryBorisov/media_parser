<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
	protected $table = 'fact';

	protected $fillable = array(
		'banner_place_id',
        'page_id',
        'utm_source',
        'utm_medium',
        'utm_term',
        'utm_campaign',
        'img_link'
	);

	public function page()
	{
		return $this->belongsTo("App\\DevelopObjectPage");
	}

	public function bannerPlace()
	{
		return $this->belongsTo("App\\BannerPlace");
	}


	public function getFact($pageID){
		return app('db')->table($this->table)->select(['page_id', 'banner_place_id', 'img_link', 'created_at'])->where(['page_id' => $pageID])->get();
	}

}
