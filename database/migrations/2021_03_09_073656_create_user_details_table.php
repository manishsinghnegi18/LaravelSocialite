<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');            
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('date_of_birth')->nullable();
            $table->string('gender',256)->nullable();
            $table->string('orientation',256)->nullable();
            $table->string('looking_for_gender',256)->nullable();
            $table->string('looking_for_orientation',256)->nullable();
            $table->longText('bio')->nullable();
            $table->longText('video')->nullable();
            $table->string('profile_image',356)->nullable();
            $table->integer('age')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
