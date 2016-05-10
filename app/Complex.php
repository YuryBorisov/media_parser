<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complex extends Model
{

    protected $fillable =
        [
            'company_id',
            'name',
            'segment_id',
            'region_id',
            'city_id',
            'street',
            'house_number',
            'area_of_apartments',
            'address_json',
            'object_website'
        ];

    protected $table = 'complexes';

    public function addComplex($company_id, $name, $segment_id, $metro_id, $region_id, $city_id,
                               $street, $house_number, $area, $address_json, $object_website)
    {
        return app('db')->table($this->table)->insert([
            'company_id' => $company_id,
            'name' => $name,
            'segment_id' => $segment_id,
            'metro_id' => $metro_id,
            'region_id' => $region_id,
            'city_id' => $city_id,
            'street' => $street,
            'house_number' => $house_number,
            'area' => $area,
            'address_json' => $address_json,
            'object_website' => $object_website
        ]);
    }

    public function getComplexName($complexID)
    {
        return app('db')->table($this->table)->where('id', $complexID)->first(['name'])->name;
    }

    public function getComplexCityName($complexID)
    {
        return (new City())->getName($this->getCityID($complexID));
    }

    public function getComplexCityID($complexID)
    {
        return app('db')->table($this->table)->where('id', $complexID)->first(['city_id'])->city_id;
    }

    public function getAllComplex()
    {
        return app('db')->table($this->table)->get();
    }

    public function getCompanyID($complexID)
    {
        return app('db')->table($this->table)->where('id', $complexID)->first(['company_id'])->company_id;
    }

    public function getComplexID($complexName){
        return app('db')->table($this->table)->where('name', $complexName)->first();
    }

}