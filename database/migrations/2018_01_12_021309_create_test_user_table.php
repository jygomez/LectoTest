<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_user', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('user_id')->unsigned();            
            $table->integer('test_id')->unsigned();
            
            $table->integer('user_points')->unsigned();
            $table->integer('total_points');
            $table->boolean('approved');
            
            // Relaciones
            $table->foreign('test_id')->references('id')->on('tests')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
                                    
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('test_user');
    }
}
