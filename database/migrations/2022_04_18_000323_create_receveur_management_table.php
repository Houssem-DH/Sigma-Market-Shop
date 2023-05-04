<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receveur_management', function (Blueprint $table) {
            $table->id();
            $table->integer('time');
            $table->float('points_on_visite');
            $table->float('minimum_amount');
            $table->float('points_to_dinar');
            $table->timestamps();
        });

        DB::table('receveur_management')->insert(
            array(
                'time' => 60,
                'points_on_visite' => 1,
                'minimum_amount' => 10,
                'points_to_dinar' => 1

            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receveur_management');
    }
};
