<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direct', function(Blueprint $table) {
            $table->increments('id');
            $table->string('query');
            $table->string('header');
            $table->text('text');
            $table->string('position');
            $table->integer('cpc');
            $table->integer('shows');
            $table->float('traffic');
            $table->integer('concurents');
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
        Schema::drop('direct');
    }
}
