<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('model_image_id');
            $table->unsignedBigInteger('model_description_id');
            $table->string('category'); // The category obtained from model_type
            $table->timestamp('date'); // The date when the image was created
            $table->string('result'); // The result obtained from class_name

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('model_image_id')->references('id')->on('model_images')->onDelete('cascade');
            $table->foreign('model_description_id')->references('id')->on('model_descriptions')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('user_histories');
    }
}
