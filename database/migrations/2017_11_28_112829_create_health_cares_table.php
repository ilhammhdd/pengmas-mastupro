<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->text('deskripsi');
            $table->integer('health_care_type_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('health_cares', function (Blueprint $table) {
            $table->foreign('health_care_type_id')->references('id')->on('health_care_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('health_cares', function (Blueprint $table) {
            $table->dropForeign('health_cares_health_care_type_id_foreign');
        });

        Schema::dropIfExists('health_cares');
    }
}
