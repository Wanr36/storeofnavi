<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Application extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titleApplication');
            $table->text('actionApplication');
            $table->text('shortTitleApplication');
            $table->text('discriptionApplication');
            $table->text('requirementsApplication');
            $table->integer('discipline_id');
            $table->text('resultApplication');
            $table->integer('priceApplication');
            $table->boolean('statusApplication');
            $table->text('imgApplication');
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
        Schema::drop('application');
    }
}
