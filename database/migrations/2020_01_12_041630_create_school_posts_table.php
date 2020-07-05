<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_posts', function (Blueprint $table) {

            $table->bigIncrements('id')->primary;
            $table->unsignedBigInteger('users_id'); // foreigh key
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('image')->default('default.png');
            $table->string('body');
            $table->integer('view_count')->default(0);
            $table->boolean('status')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('school_posts');
    }
}
