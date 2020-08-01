<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('about_us');
            $table->string('our_mobile');
            $table->string('our_email');
            $table->string('our_facebook_link');
            $table->string('our_twitter_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
}
