<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNightOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('night_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basket_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('night_orders', function (Blueprint $table) {
            $table->foreign('basket_id')->references('id')->on('baskets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('night_orders', function (Blueprint $table) {
            $table->dropForeign('night_orders_basket_id_foreign');
        });

        Schema::dropIfExists('night_orders');
    }
}
