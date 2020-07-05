<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
          $table->bigIncrements('comment_id')->primary;
           $table->unsignedBigInteger('school_id');
           $table->unsignedBigInteger('user_id'); // foreigh key
           $table->string('comment');
           $table->string('email');
           $table->string('rating');
           $table->foreign('school_id')->references('school_id')->on('school_infos')->onDelete('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('comments');
    }
}
