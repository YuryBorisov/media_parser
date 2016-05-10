<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvFactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_fact', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('develop_object_id')->unsigned();
            $table
                ->foreign('develop_object_id')
                ->references('id')
                ->on('develop_object')
            ;
            $table->string('channel');
            $table->decimal('price');
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
        Schema::drop('tv_fact');
    }
}
