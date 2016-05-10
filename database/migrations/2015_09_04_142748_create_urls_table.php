<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_platform_urls', function(Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('media_platform_id')->unsigned();
            $table
                ->foreign('media_platform_id')
                ->references('id')
                ->on('media_platforms')
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
        Schema::drop('media_platform_urls');
    }
}
