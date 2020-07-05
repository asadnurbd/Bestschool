<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_infos', function (Blueprint $table) {
          $table->bigIncrements('school_id')->primary;
          $table->string('school_name');
          $table->string('email');
          $table->integer('phone');
          $table->string('image');
          $table->integer('cost');
          $table->string('s_address');
          $table->string('area');
          $table->string('type');
          $table->integer('totalStudent');
          $table->string('feeStructureImg');
          $table->string('website');
          $table->string('low_incomeStudents');
          $table->string('equityOverview');
          $table->string('studentProgress');
          $table->string('testScore');
          $table->string('rating');
          $table->string('classRange');
          $table->string('available');
          $table->double('longi');
          $table->double('lati');
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
        Schema::dropIfExists('school_infos');
    }
}
