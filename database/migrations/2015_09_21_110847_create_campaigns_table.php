<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('agency_id')->unsigned();
            $table
                ->foreign('agency_id')
                ->references('id')
                ->on('agency')
            ;
            $table->integer('type_id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table
                ->foreign('page_id')
                ->references('id')
                ->on('develop_object_page')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('campaigns');
    }
}
