<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{

   public $timestamps = false;

   protected $fillable = ['nome', 'pontuacao_minima'];

}
