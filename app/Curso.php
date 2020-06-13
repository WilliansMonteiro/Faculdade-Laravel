<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $fillable = ['nome', 'duracao', 'especialidade'];

    public function aluno(){
        return $this->hasMany(Aluno::class);
    }
    public function disciplina(){
        return $this->hasMany(Disciplina::class);
    }

    public function professor(){
        return $this->belongsToMany(Professor::class);
    }

}
