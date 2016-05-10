<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('complex_id')->unsigned(); // ID Комплекса
            $table->string('number'); // Номер
            $table->tinyInteger('rc'); // кол-во комнат
            $table->double('sq', 5, 3); // Площадь
            $table->double('tc', 15, 3); // Общая цена
            $table->double('cpm', 15, 3); // Цена за метр
            $table->tinyInteger('st'); // Статус
            $table->date('date'); // Дата
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('statistics');
    }
}
