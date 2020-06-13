<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

    protected $fillable = ['nome', 'especialidade', 'matricula'];

   public function disciplina(){
       return $this->hasMany(Disciplina::class);
   }

   public function curso(){
       return $this->belongsToMany(Curso::class);
   }

}
