<?php

use App\Complex;

class ComplexTableSeeder extends \Illuminate\Database\Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Complex::truncate();
        $arrComplex = [
            [
                'company_id' => 0,
                'name' => '1147',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Маломосковская',
                'house_number' => '14',
                'area_of_apartments' => '44.3 — 118.8 м²',
                'address_json' => 'http://dom-1147.ru/assets/js/data.json',
                'object_website' => 'http://dom-1147.ru'
            ],
            [
                'company_id' => 0,
                'name' => 'Люберцы 2016',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Люберцы Г/П, Люберцы',
                'house_number' => 'кв-л 2, корп. 1, 3-6, 8, 17',
                'area_of_apartments' => '27.05 — 77.7 м²',
                'address_json' => 'http://lubercy2016.ru/assets/js/data.json',
                'object_website' => 'http://lubercy2016.ru'
            ],
            [
                'company_id' => 0,
                'name' => 'Ботанический сад',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Лазоревый пр',
                'house_number' => 'вл. 3, корп. 1-7',
                'area_of_apartments' => '33.2 — 123.91 м²',
                'address_json' => 'http://botsad.pioneer.ru/assets/js/data.json',
                'object_website' => 'http://botsad.pioneer.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Зиларт',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Автозаводская',
                'house_number' => '23, корп. 3, 4, 5, 6',
                'area_of_apartments' => '38.9 — 119.1 м²',
                'address_json' => 'http://zilart.ru/assets/js/data.json',
                'object_website' => 'http://zilart.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Среда',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Рязанский пр-т',
                'house_number' => '2',
                'area_of_apartments' => '26.2 — 97.5 м²',
                'address_json' => 'http://sreda-kvartal.ru/assets/js/data.json',
                'object_website' => 'http://sreda-kvartal.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'МирМитино',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Муравская',
                'house_number' => '',
                'area_of_apartments' => '25.9 — 128.9 м²',
                'address_json' => 'http://mirmitino.ru/assets/js/data.json',
                'object_website' => 'http://mirmitino.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Микрогород «В лесу»',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => '',
                'house_number' => 'корп. 11-18',
                'area_of_apartments' => '26.5 — 117.3 м²',
                'address_json' => 'http://www.microgorodvlesu.ru/assets/js/data.json',
                'object_website' => 'http://www.microgorodvlesu.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Новое Тушино',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Путилково деревня',
                'house_number' => 'корп. 4, 5, 6',
                'area_of_apartments' => '39.88 — 99.51 м²',
                'address_json' => 'http://novoetushino.com/assets/js/data.json',
                'object_website' => 'http://novoetushino.com/'
            ],
            [
                'company_id' => 0,
                'name' => 'Krost',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Авангардская',
                'house_number' => 'вл. 68-70',
                'area_of_apartments' => '',
                'address_json' => 'http://art-krost.ru/assets/js/data.json',
                'object_website' => 'http://art-krost.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'ПЯТНИЦКИЕ КВАРТАЛЫ',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Сабурово деревня',
                'house_number' => '',
                'area_of_apartments' => '',
                'address_json' => 'http://5-kv.ru/assets/js/data.json',
                'object_website' => 'http://5-kv.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Опалиха О3',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => '',
                'house_number' => '',
                'area_of_apartments' => '',
                'address_json' => 'http://urbangroup.ru/opaliha3/assets/js/data.json',
                'object_website' => 'http://urbangroup.ru/opaliha3/'
            ],
            [
                'company_id' => 0,
                'name' => 'Sampo',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => '',
                'house_number' => '',
                'area_of_apartments' => '',
                'address_json' => 'http://s-a-m-p-o.ru/assets/js/data.json',
                'object_website' => 'http://s-a-m-p-o.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Сколково Парк',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Весенняя',
                'house_number' => 'корп. 1, 3, 4, 6',
                'area_of_apartments' => '63.2 — 181.7 м²',
                'address_json' => 'http://skolkovo-park.com/assets/js/data.json',
                'object_website' => 'http://skolkovo-park.com/'
            ],
            [
                'company_id' => 0,
                'name' => 'Первый Московский',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'мкр. 5 Северный',
                'house_number' => 'корп. 2-9, 20, 23, 32-34, 36',
                'area_of_apartments' => '37.8 — 102.35 м²',
                'address_json' => 'http://www.moscovsky-park.ru/assets/js/data.json',
                'object_website' => 'http://www.moscovsky-park.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Переделкино Ближнее',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => '',
                'house_number' => '13/2, корп. 1-13',
                'area_of_apartments' => '37.2 — 85.1 м²',
                'address_json' => 'http://www.peredelkino-park.ru/assets/js/data.json',
                'object_website' => 'http://www.peredelkino-park.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Внуково 2016',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => '',
                'house_number' => 'корп. 1, 2, 3, 4, 5, 6',
                'area_of_apartments' => '32.49 — 80.31 м²',
                'address_json' => 'http://vnukovo2016.ru/assets/js/data.json',
                'object_website' => 'http://vnukovo2016.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Мелодия леса',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'дер. Голубое',
                'house_number' => 'корп. 2, 4, 6, 8',
                'area_of_apartments' => '30.2 — 87.4 м²',
                'address_json' => 'http://melody-lesa.ru/assets/js/data.json',
                'object_website' => 'http://melody-lesa.ru/'
            ],
            [
                'company_id' => 0,
                'name' => 'Парк Рублево',
                'segment_id' => 0,
                'region_id' => 0,
                'city_id' => 0,
                'street' => 'Мякининская пойма',
                'house_number' => 'корп. 1.1, 1.2, 1.3, 2.1, 2.2, 3.1, 4.1, 5.1, 6.1, 6.2, 7.1, 7.2, 8.1, 8.2, 9.1, 9.2, 10.1, 10.2, 11.1, 11.2, 12, 30',
                'area_of_apartments' => '39 — 284.2 м²',
                'address_json' => 'http://parkrublevo.ru/assets/js/park.json',
                'object_website' => 'http://parkrublevo.ru/'
            ]
        ];
        foreach ($arrComplex as $item)
            Complex::insert([
                'company_id' => $item['company_id'],
                'name' => $item['name'],
                'segment_id' => $item['segment_id'],
                'region_id' => $item['region_id'],
                'city_id' => $item['city_id'],
                'street' => $item['street'],
                'house_number' => $item['house_number'],
                'area_of_apartments' => $item['area_of_apartments'],
                'address_json' => $item['address_json'],
                'object_website' => $item['object_website']
            ]);
    }
}