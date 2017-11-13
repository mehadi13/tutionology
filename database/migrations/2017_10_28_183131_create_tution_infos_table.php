<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tution_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->integer('location_id');
            $table->integer('class_name_id');
            $table->integer('category_id');
            $table->integer('offer_salary');
            $table->integer('days_in_week');
            $table->string('sudent_gender');
            $table->string('tutor_gender');
            $table->string('subject');
            $table->string('description');
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
        Schema::dropIfExists('tution_infos');
    }
}
