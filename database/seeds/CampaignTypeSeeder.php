<?php

use Illuminate\Database\Seeder;

use App\CampaignType;
use Illuminate\Database\Eloquent\Model;

class CampaignTypeSeeder extends Seeder
{
    public function run()
    {
    	CampaignType::truncate();

        CampaignType::create(array('name' => 'Медийная реклама', 'id' => 1));
        CampaignType::create(array('name' => 'Контекстная реклама', 'id' => 2));
        CampaignType::create(array('name' => 'СЕО', 'id' => 3));
        CampaignType::create(array('name' => 'Наружная реклама', 'id' => 4));
        CampaignType::create(array('name' => 'Реклама по ТВ', 'id' => 5));
        CampaignType::create(array('name' => 'Реклама на радио', 'id' => 6));
    }
}
