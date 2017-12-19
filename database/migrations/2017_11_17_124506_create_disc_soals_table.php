<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_soals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disc_group_nomor')->unsigned();
            $table->string('soal');
            $table->string('kunci_plus');
            $table->string('kunci_minus');
        });
        Schema::table('disc_soals', function (Blueprint $table) {
            $table->foreign('disc_group_nomor')->references('nomor')->on('disc_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disc_soals', function (Blueprint $table) {
            $table->dropForeign('disc_soals_disc_group_nomor_foreign');
        });
        Schema::dropIfExists('disc_soals');
    }
}
