<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_place', function(Blueprint $table) {
            $table->increments('id');
            $table->string('selector');
            $table->string('title');
            $table->integer('media_platform_url_id')->unsigned();
            $table
                ->foreign('media_platform_url_id')
                ->references('id')
                ->on('media_platform_urls')
                ->onDelete('cascade')
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
        Schema::drop('banner_place');
    }
}
