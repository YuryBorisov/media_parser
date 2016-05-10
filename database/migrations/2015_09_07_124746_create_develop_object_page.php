<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopObjectPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('develop_object_page', function(Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('develop_object_id')->unsigned()->nullable();
            $table
                ->foreign('develop_object_id')
                ->references('id')
                ->on('develop_object')
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
        Schema::drop('develop_object_page');
    }
}
