<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{

   public $timestamps = false;

   protected $fillable = ['user', 'nome', 'pontuacao_minima'];

   public function relTestes(){
      return $this->hasMany(Questao::class, 'teste', 'id');
  }

  public function relUsuario(){
   return $this->hasOne(User::class, 'id', 'user');
}

}
