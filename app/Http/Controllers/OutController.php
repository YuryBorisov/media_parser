<?php

namespace App\Http\Controllers;

use App\BannerPlace;
use App\Complex;
use App\DevelopObjectPage;
use App\Fact;
use App\Statistics;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index2($idSite, $idComplex, $date, Statistics $statisticsModel, Fact $factModel, DevelopObjectPage $developObjectPageModel, BannerPlace $bannerPlaceModel, Complex $complexModel){



        $urlSite = $developObjectPageModel->getUrl($idSite); ;

        $nameComplex = $complexModel->getComplexName($idComplex);

        //dd($nameComplex);

        if(($urlSite = isset($urlSite->url) ? $urlSite->url : null) == null)
            return json_encode(['response' => ['status' => 'Нет такого сайта']], JSON_UNESCAPED_UNICODE);
        else if(($nameComplex = isset($nameComplex->name) ? $nameComplex->name : null) == null)
            return json_encode(['response' => ['status' => 'Нет такого ЖК']], JSON_UNESCAPED_UNICODE);
        //;
       // $urlSite = $urlSite->url;
        //dd($nameComplex);

        //$pageID = $idSite;

        //$pageUrl = $pageID->url;

        //dd($pageUrl);

        //$site = 'http://www.sz-rasskazovo.ru/about/apartments';

        $dateMonth = explode('-',explode(' ', $date)[0])[1];

        //dd($dateMonth);

        //$idPage = $developObjectPageModel->getID($site);

        $arrReturn = [];


        /*
         *
         *
         * data
         *  nameSite
         *  price
         *  data
         *
         *
         */


        $price = 0;

        foreach ($factModel->getFact($idSite) as $item){
            $r = $bannerPlaceModel->getBannerPlace($item->banner_place_id);
            if(explode('-',explode(' ', $item->created_at)[0])[1] == $dateMonth)
            $arrReturn[$r['media_platform']]['data'][] = [
                'site' => $urlSite,
                'media_platform' => $r['media_platform'],
                'title' => $r['title'],
                'price' => 100000,//$r['price'],
                'image' => $item->img_link,
                'url' => $r['url'],
                'date' => explode(' ', $item->created_at)[0]
            ];
            $price += 100000;
            $arrReturn[$r['media_platform']]['price'] = $price;
            $arrReturn[$r['media_platform']]['site'] = $r['media_platform'];
        }



        //dd($arrReturn);

        if(($complex = $complexModel->getComplexID($nameComplex)) == null) $arrComplex['status'] = null;
        else{
            $arrDate = [] ;

            $complexID = $complex->id;

            $dateComplex = '2016-05-01';

            $dateM = explode('-', $dateComplex)[1];

            $dateM2 = $dateM;

            while ($dateM == $dateM2){
                $arrDate[] = $dateComplex;
                $dateM2 = explode('-', ($dateComplex = self::incrementDay($dateComplex)))[1];
            }

            $arC = [];

            foreach ($statisticsModel->getApartmentsArrDate($complexID, $arrDate) as $item){
                $arC[$item->date][] = [
                    'tc' => $item->tc,
                    'rc' => $item->rc,
                    'sq' => $item->sq
                ];
            }
            return view('Out.index', ['data' => $arrReturn, 'complex' => $arC]);
            dd([
                 'data' => $arrReturn,
                 'complex' => $arC
            ]);
        }

        //dd(array_map("unserialize", array_unique( array_map("serialize", $arrReturn))));
    }

    public function createJson(Complex $complexModel){
        /*
         * json/Комплексы/{nameComplex/NameComplex_date.json}
         */
        $dateArray = explode('-', ($date = date('Y-m-d')));
        $response = [
            'status' => 'ok',
            'data' => []
        ];
        foreach ($complexModel->getAllComplex() as $item){
            $str = "/json/Комплексы/{$item->name}/{$item->name}_{$date}.json";
            if(Storage::exists($str)){
                $response['data'][] = [
                    'complex_name' => $item->name,
                    'message' => "За {$dateArray[2]}/{$dateArray[1]}/{$dateArray[0]} файл уже создан"
                ];
                continue;
            }
            Storage::put($str, file_get_contents($item->address_json));
            $response['data'][] = [
                'complex_name' => $item->name,
                'message' => "За {$dateArray[2]}/{$dateArray[1]}/{$dateArray[0]} файл успешно создан"
            ];
        }
        return json_encode(['response' => $response], JSON_UNESCAPED_UNICODE);
    }

    public function addStatisticsForComplex(Statistics $statisticsModel, Complex $complexModel, $nameComplex){
        $response = ['status' => 'ok'];
        if(($complex = $complexModel->getComplexID($nameComplex)) == null) $response['status'] = 'Такого комплекса нет';
        else{
            $arr = [];
            $complexID = $complex->id;
            $countI = 0;
            $complexID = $complex->id;
            $str = "/json/Комплексы/{$complex->name}/";
             foreach (Storage::files($str) as $file) {
                    if($countI != 0){
                        $dateFile = explode('.', explode('_', $file)[1])[0];
                        if($statisticsModel->isApartments($complexID, $dateFile) != null) continue;
                        $jsonData = json_decode(Storage::get($str."{$complex->name}_{$dateFile}.json"), true)['apartments'];
                        $datePred = self::decrementDay($dateFile);
                        $jsonDataPred = json_decode(Storage::get($str."{$complex->name}_{$datePred}.json"), true)['apartments'];
                        $key = array_keys($jsonData);
                        foreach ($key as $itemKey){
                            if(isset($jsonData[$itemKey]) and isset($jsonDataPred[$itemKey]))
                                if($jsonData[$itemKey]['st'] == 1 and $jsonDataPred[$itemKey]['st'] == 0) {
                                    $arr[] = [
                                        'complex_id' => $complexID,
                                        'number' => $itemKey,
                                        'rc' => isset($jsonData[$itemKey]['rc']) ? $jsonData[$itemKey]['rc'] : 0,
                                        'sq' => isset($jsonData[$itemKey]['sq']) ? $jsonData[$itemKey]['sq'] : 0,
                                        'tc' => isset($jsonDataPred[$itemKey]['tc']) ? $jsonDataPred[$itemKey]['tc'] : 0,
                                        'cpm' => isset($jsonData[$itemKey]['cpm']) ? $jsonData[$itemKey]['cpm'] : 0,
                                        'st' => $jsonData[$itemKey]['st'],
                                        'date' => $dateFile
                                    ];
                                }
                        }
                    }
                    $countI++;
                }
            $statisticsModel->addApartments($arr);
        }
        return json_encode(['response' => $response], JSON_UNESCAPED_UNICODE);
    }

    public function addAllComplex(Statistics $statisticsModel, Complex $complexModel){
        $response = ['status' => 'ok'];
        $arr = [];
        $countI = 0;
        foreach ($complexModel->getAllComplex() as $item) {
            $complexID = $item->id;
            $str = "/json/Комплексы/{$item->name}/";
            foreach (Storage::files($str) as $file) {
                if($countI != 0){
                    $dateFile = explode('.', explode('_', $file)[1])[0];
                    if($statisticsModel->isApartments($complexID, $dateFile) != null) continue;
                    $jsonData = json_decode(Storage::get($str."{$item->name}_{$dateFile}.json"), true)['apartments'];
                    $datePred = self::decrementDay($dateFile);
                    $jsonDataPred = json_decode(Storage::get($str."{$item->name}_{$datePred}.json"), true)['apartments'];
                    $key = array_keys($jsonData);
                    foreach ($key as $itemKey){
                        if(isset($jsonData[$itemKey]) and isset($jsonDataPred[$itemKey]))
                            if($jsonData[$itemKey]['st'] == 1 and $jsonDataPred[$itemKey]['st'] == 0) {
                                $arr[] = [
                                    'complex_id' => $complexID,
                                    'number' => $itemKey,
                                    'rc' => isset($jsonData[$itemKey]['rc']) ? $jsonData[$itemKey]['rc'] : 0,
                                    'sq' => isset($jsonData[$itemKey]['sq']) ? $jsonData[$itemKey]['sq'] : 0,
                                    'tc' => isset($jsonDataPred[$itemKey]['tc']) ? $jsonDataPred[$itemKey]['tc'] : 0,
                                    'cpm' => isset($jsonData[$itemKey]['cpm']) ? $jsonData[$itemKey]['cpm'] : 0,
                                    'st' => $jsonData[$itemKey]['st'],
                                    'date' => $dateFile
                                ];
                            }
                    }
                }
                $countI++;
            }
            $countI = 0;
        }
        $statisticsModel->addApartments($arr);
        return json_encode(['response' => $response], JSON_UNESCAPED_UNICODE);
    }

    public static function incrementDay($date, $countDay = 1){
        return date('Y-m-d', strtotime($date. ' + ' .$countDay. ' days'));
    }

    public static function decrementDay($date, $countDay = 1){
        return date('Y-m-d', strtotime($date. ' - ' .$countDay. ' days'));
    }

}
