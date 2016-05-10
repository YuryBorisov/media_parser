<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevelopObjectPage extends Model
{
    protected $table = 'develop_object_page';

    protected $fillable = array('organic_traffic_ya', 'organic_traffic_g');

    public function developObject()
	{
		return $this->belongsTo('App\\DevelopObject');
	}

	public function developObjectPage()
	{
		return $this->belongsTo('App\\DevelopObjectPage');
	}

	public static function findByUrlOrCreate($url)
	{
		$url = explode("?", $url);
		$url = $url[0];
		$page = self::where('url', 'like', '%' . $url . '%')->first();

		if (!$page) {
			$page = new self;
			$page->url = $url;

			$page->save();
		}

		return $page;
	}

	public function getUrls($arrIDs){
		$arr = [];
		foreach (app('db')->table($this->table)->select(['id', 'url'])->whereIn('id', $arrIDs)->get() as $item){
			$arr[$item->id] = $item->url;
		}
		return $arr;
	}

	public function getID($url){

		return app('db')->table($this->table)->where(['url' => $url])->first(['id'])->id;

	}


}
