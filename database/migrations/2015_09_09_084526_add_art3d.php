<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArt3d extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('develop_object_page', function(Blueprint $table) {
            $table->string('json_url');
            $table->boolean('is_art_3d');
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
            $table->dropColumn('json_url');
            $table->dropColumn('is_art_3d');
        });
    }
}
