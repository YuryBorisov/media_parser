<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table
                ->foreign('page_id')
                ->references('id')
                ->on('develop_object_page')
            ;
            $table->string('name');
            $table->string('rc')->nullable();
            $table->string('tc')->nullable();
            $table->string('sq')->nullable();
            $table->string('cpm')->nullable();
            $table->string('st')->nullable();
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
        Schema::drop('apartments');
    }
}
