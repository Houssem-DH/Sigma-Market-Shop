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
        Schema::create('paginate_options', function (Blueprint $table) {
            $table->id();
            $table->integer('home_n_articles');
            $table->integer('view_category_n_articles');
            $table->integer('n_category');
            $table->integer('n_articles_admin');
            $table->integer('n_category_admin');
            $table->integer('n_member_admin');
            $table->integer('n_receveur_admin');
            $table->integer('n_orders_admin');
            $table->integer('n_payments_admin');
            $table->string('logo_image')->nullable();
            $table->string('head_logo_image')->nullable();
            $table->timestamps();

        });

        DB::table('paginate_options')->insert(
            array(
                'home_n_articles' => 12,
                'view_category_n_articles' => 12,
                'n_category'=> 12,
                'n_articles_admin'=> 12,
                'n_category_admin'=> 12,
                'n_articles_admin'=> 12,
                'n_member_admin'=> 12,
                'n_receveur_admin'=> 12,
                'n_orders_admin'=> 12,
                'n_payments_admin'=> 12
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
        Schema::dropIfExists('paginate_options');
    }
};
