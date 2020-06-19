<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teste');
            $table->text('enunciado');
            $table->string('respostaA', 50);
            $table->string('respostaB', 50);
            $table->string('respostaC', 50);
            $table->string('respostaD', 50);
            $table->string('respostaE', 50);
            $table->char('respostaCerta', 1);
            $table->decimal('valorTotalQuestao', 5, 2);

            $table->foreign('teste')->references('id')->on('testes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
