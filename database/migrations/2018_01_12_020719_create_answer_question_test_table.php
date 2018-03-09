<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerQuestionTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_question_test', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('question_test_id')->unsigned();
            $table->integer('answer_id')->unsigned();
                        
            $table->boolean('correct_answer');
            
            // Relaciones
            $table->foreign('question_test_id')->references('id')->on('question_test')
                                               ->onDelete('cascade')
                                               ->onUpdate('cascade');
                                               
            $table->foreign('answer_id')->references('id')->on('answers')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_question_test');
    }
}
