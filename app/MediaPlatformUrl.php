<?php

namespace App;

use \Eloquent;

class MediaPlatformUrl extends Eloquent {

	protected $table = 'media_platform_urls';
	
	// public static $rules = array
	// (
	// 	'name' => 'required',
	// );
	protected $fillable = array(
		'media_platform_id',
		'path'
	);

	public function mediaPlatform()
	{
		return $this->belongsTo('App\\MediaPlatform');
	}

	public function bannerPlaces()
	{
		return $this->hasMany('App\\BannerPlace');
	}
	
	public function getFullNameAttribute()
	{
		return $this->mediaPlatform()->first()->getAttribute('url') . $this->getAttribute('path');
	}

	public static function allWithBanners()
	{
		$result = array();

		foreach(self::orderBy('id', 'desc')->get() as $page) {
			$uri = $page->getFullNameAttribute();

			

			$bannerPlaces = $page->bannerPlaces()->get();

			if (count($bannerPlaces)) {
				$result[$uri] = array();

				foreach ($bannerPlaces as $place) {
					$result[$uri][] = array(
						"id" => $place->id, 
						"selector" => $place->selector,
						"img_selector" => $place->img_selector
					);
				}
			}
			
		}
		return $result;
	}

	public function getMP($id){
		$idPlatform = app('db')->table($this->table)->where('id', $id)->first(['media_platform_id'])->media_platform_id;
		return MediaPlatform::getUrlPlatform($idPlatform);
	}

	public function getUrl($id){
		return app('db')->table($this->table)->where(['id' => $id])->first(['path'])->path;
	}



}