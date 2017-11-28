<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('patient_accounts', function (Blueprint $table) {
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_accounts', function (Blueprint $table) {
            $table->dropForeign('patient_accounts_patient_id_foreign');
            $table->dropForeign('patient_accounts_user_id_foreign');
        });

        Schema::dropIfExists('patient_accounts');
    }
}
