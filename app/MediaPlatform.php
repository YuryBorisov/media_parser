<?php

namespace App;

use \Eloquent;

class MediaPlatform extends Eloquent {

	protected $table = 'media_platforms';

	// public static $rules = array
	// (
	// 	'name' => 'required',
	// );

	public function urls()
	{
		return $this->hasMany('App\\MediaPlatformUrl');
	}
	
	// public function getNameAttribute()
	// {
	// 	return $this->getAttribute('name');
	// }

	public static function getUrlPlatform($id){
		return app('db')->table('media_platforms')->where(['id' => $id])->first(['url'])->url;
	}


}