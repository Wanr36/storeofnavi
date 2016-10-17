<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionAnswer', function (Blueprint $table) {
            $table->increments('id');
            $table->text('textQuestionAnswer');
            $table->text('addUserQuestionAnswer');
            $table->boolean('statusQuestionAnswer');
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
        Schema::drop('questionAnswer');
    }
}
