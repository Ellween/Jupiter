<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('full_description');
            $table->string('alien_1');
            $table->text('alien_1_description');
            $table->string('alien_2');
            $table->text('alien_2_description');
            $table->string('alien_3');
            $table->text('alien_3_description');
            $table->string('leader_alien');
            $table->text('leader_alien_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
