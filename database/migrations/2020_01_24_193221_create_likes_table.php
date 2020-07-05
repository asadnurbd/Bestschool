<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->unsignedBigInteger('users_id'); // foreigh key
            $table->unsignedBigInteger('post_id'); // foreigh key
            $table->boolean('like')->default(false);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('school_posts')->onDelete('cascade');
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
        Schema::dropIfExists('likes');
    }
}
