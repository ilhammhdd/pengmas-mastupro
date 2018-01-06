<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_history_id')->unsigned();
            $table->string('current_style');
            $table->string('pressure_style');
            $table->string('self_style');
            $table->timestamps();
        });

        Schema::table('test_results', function (Blueprint $table) {
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
        Schema::table('test_results', function (Blueprint $table) {
            $table->dropForeign('test_results_test_history_id_foreign');
        });

        Schema::dropIfExists('test_results');
    }
}
