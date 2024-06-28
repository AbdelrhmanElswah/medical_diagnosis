<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('model_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // To store the model type (e.g., 'brain', 'chest')
            $table->string('class_name'); // To store the class name of the diagnosis
            $table->text('description'); // The detailed description for the class
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('model_descriptions');
    }
}
