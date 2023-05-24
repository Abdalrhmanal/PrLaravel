<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courses_id');
            $table->foreign('courses_id')->references('id')->on('courses');
            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students');
            $table->enum('status',['pending','taking','reject'])->default('pending');
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
        Schema::dropIfExists('courses_students');
    }
};
