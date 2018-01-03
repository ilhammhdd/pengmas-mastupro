<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->boolean('on_duty');
            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_user_id_foreign');
            $table->dropForeign('employees_profile_id_foreign');
        });

        Schema::dropIfExists('employees');
    }
}
