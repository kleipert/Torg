<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('sex');
            $table->integer('age');
            $table->string('email')->unique();
            $table->integer('days_absent');
            $table->bigInteger('school_class_id')->unsigned();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('school_class_id')->references('id')->on('school_classes')->onDelete('cascade')->onUpdate('cascade');
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}