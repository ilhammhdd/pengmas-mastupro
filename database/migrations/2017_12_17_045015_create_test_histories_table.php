<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('test_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('test_histories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('test_id')->references('id')->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_histories', function (Blueprint $table) {
            $table->dropForeign('test_histories_user_id_foreign');
            $table->dropForeign('test_histories_test_id_foreign');
        });

        Schema::dropIfExists('test_histories');
    }
}
