<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */

    public function up()
    {
        Schema::create('knowledge', function (Blueprint $table) {
            $table->increments('id');
            $table->string('disease')->unique();
            $table->text('commonSymptoms');
            $table->text('uncommonSymptoms');
            $table->text('relatedDiseases')->nullable();
            $table->string('diseaseSex');
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
        Schema::dropIfExists('knowledge');
    }
}
