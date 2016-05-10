<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\BannerPlace;
use App\MediaPlatformUrl;
use App\DevelopObjectPage as Page;
use App\SeoQuery as Query;
use App\Fact;
use App\Direct;
use App\Utm;
use \Request;

class BannersApiController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function getAll()
    {
    	return response()->json(MediaPlatformUrl::allWithBanners());
    }

    public function createFact()
    {
        $bannerPlace = BannerPlace::findOrFail(Request::input("banner_place_id"));
        $page = Page::findByUrlOrCreate(Request::input("url"));
        $utm = Utm::getUtm(Request::input("url"));

        $fact = Fact::create(array(
            'banner_place_id'   => $bannerPlace->id,
            'page_id'           => $page->id,
            'img_link'          => Request::input("img_link"),
            'utm_source'        => $utm->utm_source,
            'utm_medium'        => $utm->utm_medium,
            'utm_term'          => $utm->utm_term,
            'utm_campaign'      => $utm->utm_campaign,
        ));

        return response()->json($fact);
    }

    public function getContextPage()
    {
        $pages = Page::where('contextAnalytic', true)->get();

        return response()->json($pages);
    }

    public function getSearchPage()
    {
        $pages = Page::where('organic', true)->get();

        return response()->json($pages);
    }

    public function addSearchTrafic()
    {
        $trafic = Request::input('trafic');


        var_dump($trafic);
        $page = Page::find(Request::input('id'))
            ->update(
                array(
                    'organic_traffic_ya' => $trafic[0],
                    'organic_traffic_g' => $trafic[1]
                )
            );

            var_dump($page);
    }

    public function createDirects() {
        foreach (Request::input('direct') as $direct) {
            Direct::create($direct);
        }
    }

    public function createQueries()
    {
        foreach (Request::input('queries') as $query) {
            Query::create($query);
        }
    }

}