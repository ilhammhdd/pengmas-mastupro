<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplanationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explanations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dominan')->unique();
            $table->string('tujuan');
            $table->string('menilai_orang_dari');
            $table->string('mempengaruhi_orang_dari');
            $table->string('sering');
            $table->string('dibawah_tekanan');
            $table->string('ketakutan');
            $table->string('meningkatkan_efektifitas_melalui');
            $table->text('penjelasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explanations');
    }
}
