<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepDetailScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_detail_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('step_total_score_id')->unsigned();
            $table->string('point_nama');
            $table->integer('test_history_id')->unsigned();
            $table->integer('nilai');
            $table->timestamps();
        });
        Schema::table('step_detail_scores', function (Blueprint $table) {
            $table->foreign('step_total_score_id')->references('id')->on('step_total_scores')->onDelete('cascade');
            $table->foreign('point_nama')->references('nama')->on('points')->onDelete('cascade');
            $table->foreign('test_history_id')->references('id')->on('test_histories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('step_detail_scores', function (Blueprint $table) {
            $table->dropForeign('step_detail_scores_step_total_score_id_foreign');
            $table->dropForeign('step_detail_scores_point_nama_foreign');
            $table->dropForeign('step_detail_scores_test_history_id_foreign');
        });
        Schema::dropIfExists('step_detail_scores');
    }
}
