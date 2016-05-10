<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgToBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_place', function($table)
        {
            $table->string('img_selector')->nullable();
            $table->string('object_selector')->nullable();
        });

        Schema::table('fact', function($table)
        {
            $table->string('img_link')->nullable();
            $table->string('object_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_place', function($table)
        {
            $table->dropColumn('img_selector');
            $table->dropColumn('object_selector');
        });

        Schema::table('fact', function($table)
        {
            $table->dropColumn('img_link');
            $table->dropColumn('object_link');
        });
    }
}
