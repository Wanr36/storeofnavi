<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContentApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentApplication', function (Blueprint $table) {
            $table->increments('id');
            $table->text('form');
            $table->text('data_check');
            $table->text('count');
            $table->text('count_check');
            $table->text('typeFile');
            $table->text('result');
            $table->text('additionalDescription');
            $table->text('exempleResult');
            $table->integer('application_id');
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
        Schema::drop('contentApplication');
    }
}
