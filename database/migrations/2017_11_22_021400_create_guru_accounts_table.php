<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('guru_accounts', function (Blueprint $table) {
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guru_accounts',function (Blueprint $table){
            $table->dropForeign('guru_accounts_guru_id_foreign');
            $table->dropForeign('guru_accounts_user_id_foreign');
        });

        Schema::dropIfExists('guru_accounts');
    }
}
