<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerQuestionTestUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_question_test_user', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            
            $table->integer('user_id')->unsigned();
            $table->integer('answer_question_test_id')->unsigned();
            
            $table->boolean('selected_answers');
            $table->integer('answer_points')->unsigned();
            $table->timestamps();
            
            // Relaciones
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('answer_question_test_id')->references('id')->on('answer_question_test');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_question_test_user');
    }
}
