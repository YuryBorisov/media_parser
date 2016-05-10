<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopObject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('develop_object', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('developer_id')->unsigned()->nullable();
            $table
                ->foreign('developer_id')
                ->references('id')
                ->on('developer')
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
        Schema::drop('develop_object');
    }
}
