<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassTeacherPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_class_teacher_permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('school_class_teacher_id')->unsigned();
            $table->bigInteger('permission_id')->unsigned();
        });

        Schema::table('school_class_teacher_permission', function (Blueprint $table) {
            $table->foreign('school_class_teacher_id')->references('id')->on('school_class_teacher')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_class_teacher_permission');
    }
}
