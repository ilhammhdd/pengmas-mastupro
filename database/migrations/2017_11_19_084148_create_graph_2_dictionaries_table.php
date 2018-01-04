<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraph2DictionariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graph_2_dictionaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('point_nama');
            $table->integer('nilai_graph');
            $table->integer('nilai_graph_converted');
            $table->timestamps();
        });

        Schema::table('graph_2_dictionaries', function (Blueprint $table) {
            $table->foreign('point_nama')->references('nama')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('graph_2_dictionaries', function (Blueprint $table) {
            $table->dropForeign('graph_2_dictionaries_point_nama_foreign');
        });
        Schema::dropIfExists('graph_2_dictionaries');
    }
}
