<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('location_id')->unsigned();
           
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('badge_id')->unsigned();
          
            $table->timestamps();
        });

        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
