<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->string('nama');
            $table->string('nama_file');
            $table->integer('kelas_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('siswas', function(Blueprint $table){
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswas', function(Blueprint $table){
            $table->dropForeign('siswas_kelas_id_foreign');
        });
        Schema::dropIfExists('siswas');
    }
}
