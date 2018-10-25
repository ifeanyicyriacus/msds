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
            $table->foreign('user_email')->references('email')->on('users');

            $table->string('bloodGroup')->default("--");
            $table->string('genotype')->default("--");
            $table->mediumInteger('height')->default("0");
            $table->mediumInteger('weight')->default("0");
            $table->string('allergies')->default("----");
            $table->string('medications')->default("----");
            $table->string('organDonated')->default("----");
            $table->integer('smoke')->default(false);
            $table->boolean('pregnant')->default(false);
            $table->boolean('overweight')->default(false);
            $table->boolean('hbp')->default(false);
            $table->boolean('diabetes')->default(false);
            $table->boolean('ckd')->default(false);
            $table->boolean('cold')->default(false);
            $table->boolean('chd')->default(false);
            $table->boolean('stroke')->default(false);
            $table->boolean('cancer')->default(false);
            $table->text('medicalNote')->nullable();
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
