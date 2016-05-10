<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('develop_object_page', function(Blueprint $table) {
            $table->integer('organic_traffic_ya')->nullable();
            $table->integer('organic_traffic_g')->nullable();
            $table->boolean('organic')->nullable();
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
            $table->dropColumn('organic_traffic_ya');
            $table->dropColumn('organic_traffic_g');
            $table->dropColumn('organic');
        });
    }
}
