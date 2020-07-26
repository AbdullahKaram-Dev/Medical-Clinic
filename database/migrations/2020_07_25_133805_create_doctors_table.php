<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{

    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title_jop');
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('facebook_link')->unique();
            $table->string('twitter_link')->unique();
            $table->string('linked-in_link')->unique();
            $table->string('mobile_number')->unique();
            $table->enum('status',array('active','deactivate'))->default('active');
            $table->foreignId('department_id')->references('id')->on('departments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
