<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('disease')->unique();
            $table->text('commonSymptoms');
            $table->text('uncommonSymptoms');
            $table->text('relatedDiseases')->nullable();//i just added it->nullable()
            $table->string('diseaseSex');
            $table->string('doctorType');
            $table->smallInteger('criticalLevel');
            $table->text('description');
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
        Schema::dropIfExists('diseases');
    }
}
