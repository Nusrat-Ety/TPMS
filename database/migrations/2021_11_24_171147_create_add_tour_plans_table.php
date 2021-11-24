<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTourPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_tour_plans', function (Blueprint $table) {
            $table->id();
            $table->String('Tourname');
            $table->String('TourDestination');
            $table->String('TourDuration');
            $table->double('TourDate');
            $table->double('TourCost');
            $table->double('Traveler_Amount');
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
        Schema::dropIfExists('add_tour_plans');
    }
}
