<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table){

            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('avatar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
