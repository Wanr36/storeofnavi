<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuyApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BuyApplication', function (Blueprint $table) {
            $table->increments('id');
            $table->text('insert_value');
            $table->integer('application_id');
            $table->integer('user_id');
            $table->integer('price');
            $table->text('pdf_name');
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
        Schema::drop('BuyApplication');
    }
}
