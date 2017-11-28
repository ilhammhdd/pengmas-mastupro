<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCareAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_care_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('health_care_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('health_care_accounts', function (Blueprint $table) {
            $table->foreign('health_care_id')->references('id')->on('health_cares');
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
        Schema::table('health_care_accounts', function (Blueprint $table) {
            $table->dropForeign('health_care_accounts_health_care_id_foreign');
            $table->dropForeign('health_care_accounts_user_id_foreign');
        });

        Schema::dropIfExists('health_care_accounts');
    }
}
