<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('condition')->unique();
            $table->text('commonSymptoms');
            $table->text('uncommonSymptoms');
            $table->text('relatedCondition')->nullable();
            $table->string('conditionSex');
            $table->string('doctorType');
            $table->smallInteger('criticalLevel');
            $table->text('description');
            $table->string('added_by');
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
        Schema::dropIfExists('conditions');
    }
}
