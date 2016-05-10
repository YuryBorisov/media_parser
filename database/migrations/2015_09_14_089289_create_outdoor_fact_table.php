<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutdoorFactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outdoor_fact', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('develop_object_id')->unsigned();
            $table
                ->foreign('develop_object_id')
                ->references('id')
                ->on('develop_object')
            ;
            $table->integer('banner_format_id')->unsigned();
            $table
                ->foreign('banner_format_id')
                ->references('id')
                ->on('outdoor_banner_format')
            ;
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
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
        Schema::drop('outdoor_fact');
    }
}
