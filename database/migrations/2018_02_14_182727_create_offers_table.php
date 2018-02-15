<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->text('conditions');
            $table->string('image');
            $table->decimal('price', 10, 2);
            $table->decimal('dscto', 10, 2);
            $table->dateTime('publication_date');
            $table->dateTime('expiration_date');
            $table->integer('purchases');
            $table->integer('umbral');
            $table->boolean('revised')->default(false);

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->foreign('store_id')
                ->references('id')->on('stores')
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
        Schema::dropIfExists('offers');
    }
}
