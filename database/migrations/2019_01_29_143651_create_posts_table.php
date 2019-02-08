<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->default(1);
            $table->integer('vote')->default(0);
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->text('full_description');
            $table->string('alien_1');
            $table->text('alien_1_description');
            $table->string('alien_2');
            $table->text('alien_2_description');
            $table->string('alien_3');
            $table->text('alien_3_description');
            $table->string('leader_alien');
            $table->text('leader_alien_description');
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
        Schema::dropIfExists('posts');
    }
}
