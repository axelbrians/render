<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_answer')->unsigned();
            $table->bigInteger('id_question')->unsigned();
            $table->string('the_answer', 1000);
            $table->timestamps();

            $table->foreign("id_answer")->references("id")->on("users")->cascadeOnDelete();
            $table->foreign("id_question")->references("id")->on("questions")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
