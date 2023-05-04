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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('paypal_email')->nullable();
            $table->float('points_count')->default('0');
            $table->float('widthraw')->default('0');
            $table->float('total_widthraw')->default('0');
            $table->tinyInteger('state')->default('0');
            $table->integer('p')->default('0');
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
        Schema::dropIfExists('points');
    }
};
