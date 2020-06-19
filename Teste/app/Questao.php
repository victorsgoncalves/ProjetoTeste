<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    public $timestamps = false;
    
    protected $fillable = ['teste', 'enunciado', 'respostaA',
     'respostaB', 'respostaC','respostaD','respostaE','respostaCerta', 'valorTotalQuestao'];
}
    