<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_class_teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('school_class_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
        });

        Schema::table('school_class_teacher', function (Blueprint $table) {
            $table->foreign('school_class_id')->references('id')->on('school_classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_class_teacher');
    }
}
