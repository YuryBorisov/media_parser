<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutdoorBannerFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outdoor_banner_format', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('outdoor_contractor_id')->unsigned();
            $table
                ->foreign('outdoor_contractor_id')
                ->references('id')
                ->on('outdoor_contractor')
            ;
            $table->decimal('price', 8, 2);
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
        Schema::drop('outdoor_banner_format');
    }
}
