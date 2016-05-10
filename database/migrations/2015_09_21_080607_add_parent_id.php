<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('develop_object_page', function(Blueprint $table) {
            $table->integer('parent_id')->nullable()->unsigned();
            $table
                ->foreign('parent_id')
                ->references('id')
                ->on('develop_object_page')
            ;
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
            $table->dropColumn('parent_id');
        });
    }
}
