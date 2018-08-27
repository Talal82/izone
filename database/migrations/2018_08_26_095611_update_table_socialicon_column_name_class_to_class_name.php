<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableSocialiconColumnNameClassToClassName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_icons', function(Blueprint $table) {
            $table->renameColumn('class', 'class_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_icons', function(Blueprint $table) {
            $table->renameColumn('class_name', 'class');
        });
    }
}
