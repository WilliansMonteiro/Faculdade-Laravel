<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  protected $fillable = ['name', 'cpf', 'matricula'];

   public function curso(){
       return $this->belongsTo(Curso::class);
   }

   public function disciplina(){
       return $this->belongsToMany(Disciplina::class);
   }


}
