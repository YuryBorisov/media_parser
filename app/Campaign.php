<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function campaignType() {
    	return $this->belongsTo('App\\CampaignType', 'type_id');
    }

    public function page()
    {
    	return $this->belongsTo('App\\DevelopObjectPage', 'page_id');
    }

    public function agency()
    {
    	return $this->belongsTo('App\\Agency');
    }
}
