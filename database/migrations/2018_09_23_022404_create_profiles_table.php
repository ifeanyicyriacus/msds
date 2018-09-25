<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email');
            $table->mediumInteger('height')->nullable();
            $table->mediumInteger('weight')->nullable();
            $table->integer('smoke')->nullable();
            $table->boolean('pregnant')->nullable();
            $table->boolean('overweight')->nullable();
            $table->boolean('hbp')->nullable();
            $table->boolean('diabetes')->nullable();
            $table->boolean('ckd')->nullable();
            $table->boolean('cold')->nullable();
            $table->boolean('chd')->nullable();
            $table->boolean('stroke')->nullable();
            $table->boolean('cancer')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
