<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepTotalScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_total_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor')->unsigned();
            $table->integer('test_history_id')->unsigned();
            $table->integer('total');
            $table->timestamps();
        });
        Schema::table('step_total_scores', function (Blueprint $table) {
            $table->foreign('test_history_id')->references('id')->on('test_histories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('step_total_scores', function (Blueprint $table) {
            $table->dropForeign('step_total_scores_test_history_id_foreign');
        });
        Schema::dropIfExists('step_total_scores');
    }
}
