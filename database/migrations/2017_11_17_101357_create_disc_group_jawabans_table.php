<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscGroupJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_group_jawabans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disc_group_nomor')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('jawaban_plus');
            $table->string('jawaban_minus');
            $table->timestamps();
        });
        Schema::table('disc_group_jawabans', function (Blueprint $table) {
            $table->foreign('disc_group_nomor')->references('nomor')->on('disc_groups')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disc_group_jawabans', function (Blueprint $table) {
            $table->dropForeign('disc_group_jawabans_disc_group_nomor_foreign');
            $table->dropForeign('disc_group_jawabans_user_id_foreign');
        });
        Schema::dropIfExists('disc_group_jawabans');
    }
}
