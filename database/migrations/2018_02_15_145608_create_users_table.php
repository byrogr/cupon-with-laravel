<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->string('name', 100);
            $table->string('lastaname');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->boolean('enable_email');
            $table->dateTime('high_date');
            $table->dateTime('birth_date');
            $table->string('dni', 8);
            $table->string('creditcard_number', 20);

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
