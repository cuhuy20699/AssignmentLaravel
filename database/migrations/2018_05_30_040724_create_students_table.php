<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rollnumber');
            $table->timestamps();
        });
        Schema::create('timeslots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slotId');
            $table->string('timeslot');
            $table->timestamps();
        });
        Schema::create('student_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rollnumber');
            $table->string('classId');
            $table->string('date');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classId');
            $table->string('start');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('attendance_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slotid');
            $table->string('rollnumber');
            $table->string('date');
            $table->integer('status');
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
        Schema::dropIfExists('students');
    }
}
