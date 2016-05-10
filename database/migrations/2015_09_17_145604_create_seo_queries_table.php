<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_queries', function(Blueprint $table) {
            $table->increments('id');
            $table->string('keyword');
            $table->integer('position');
            $table->float('traffic');
            $table->float('cpc');
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
        Schema::drop('seo_queries');
    }
}
