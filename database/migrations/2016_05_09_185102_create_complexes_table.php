<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complexes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned(); // ID
            $table->string('name'); // Название комплекса
            $table->tinyInteger('segment_id')->unsigned(); // ID  ценовой сегмент
            $table->integer('region_id')->unsigned(); // ID региона
            $table->integer('city_id')->unsigned(); // ID города
            $table->string('street'); // Улица
            $table->string('house_number'); // Номер дома
            $table->string('area_of_apartments')->nullable(); // Площадь (Площадь: от 125 до 417 м2)
            $table->string('address_json'); // Адрес json файла
            $table->string('object_website')->nullable(); // Сайт объекта
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complexes');
    }
}
