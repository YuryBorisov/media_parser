<?php

namespace App;

use \Eloquent;

class BannerPlace extends Eloquent {

	protected $table = 'banner_place';
	
	// public static $rules = array
	// (
	// 	'name' => 'required',
	// );

	public function mediaPlatformUrl()
	{
		return $this->belongsTo('App\\MediaPlatformUrl');
	}
	
	public function getFullNameAttribute()
	{
		return  $this->mediaPlatformUrl()->first()->getFullNameAttribute() . " " . $this->getAttribute('title');
	}


	public function getBannerPlace($id){
		$r = app('db')->table($this->table)->select('id', 'title', 'media_platform_url_id', 'price')->where('id', $id)->get();
		$mediaPlatformUrl = new MediaPlatformUrl();
		return [
			'title' => $r[0]->title,
			'price' => $r[0]->price,
			'url' => $mediaPlatformUrl->getUrl($r[0]->media_platform_url_id),
			'media_platform' => $mediaPlatformUrl->getMP($r[0]->media_platform_url_id)
		];
	}


}
