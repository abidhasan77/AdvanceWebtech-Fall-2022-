<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('VehicleName');
            $table->string('Type');
            $table->string('image');
            $table->string('StartingPoint');
            $table->string('FinishingPoint');
            $table->string('TotalSeat');
            $table->string('Price');
            $table->string('ExtraInfo');
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
        Schema::dropIfExists('add_vehicles');
    }
};
