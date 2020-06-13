<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome','carga'];

     public function curso(){
         return $this->belongsTo(Curso::class);
     }

     public function professor(){
         return $this->belongsTo(Professor::class);
     }

     public function aluno(){
         return $this->belongsToMany(Aluno::class);
     }
}
