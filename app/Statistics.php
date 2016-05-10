<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{

    public $fillable = [
        'complex_id',
        'number', // Номер
        'rc', // кол-во комнат
        'sq', // Площадь
        'tc', // Общая цена
        'cpm', // Цена за метр
        'st', // Статус
        'date' // Дата
    ];

    protected $table = 'statistics';

    public function addApartment($complex_id, $number, $rc, $sq, $tc, $cpm, $st, $date){
        return app('db')->table($this->table)->insert([
            'complex_id' => $complex_id,
            'number' => $number,
            'rc' => $rc,
            'sq' => $sq,
            'tc' => $tc,
            'cpm' => $cpm,
            'st' => $st,
            'date' => $date
        ]);
    }

    public function addApartments($arrApartment){
        return app('db')->table($this->table)->insert($arrApartment);
    }

    public function isApartments($complexID, $date){
        return app('db')->table($this->table)->where(['complex_id' => $complexID, 'date' => $date])->first(['date']);
    }

    public function getApartmentsArrDate($complexID, $arrDate){
        return app('db')->table($this->table)->where(['complex_id' => $complexID])->whereIn('date' , $arrDate)->get();
    }

}
