<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->foreignId('country_id')->constrained('country');
            $table->timestamps();
        });

        DB::table('cities')->insert([
            'city_name' => 'Zagreb',
            'country_id' => 1
        ]);

        DB::table('cities')->insert([
            'city_name' => 'Niš',
            'country_id' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
