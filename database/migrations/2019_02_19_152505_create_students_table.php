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
            $table->string('IDnumber')->unique();
            $table->string('Lastname');
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Suffix')->nullable();            
            $table->string('Course')->nullable();
            $table->string('PhoneNumber')->unique();
            $table->string('Email')->unique();
            $table->date('Birthday');
            $table->string('Gender');
            $table->rememberToken();
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
