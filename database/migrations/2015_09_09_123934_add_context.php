<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContext extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('develop_object_page', function(Blueprint $table) {
            $table->boolean('contextAnalytic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('develop_object_page', function(Blueprint $table) {
            $table->dropColumn('contextAnalytic');
        });
    }
}
