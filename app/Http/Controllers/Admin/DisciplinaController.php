<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index(){
        $disciplinas = \App\Disciplina::all();
        return view('admin.disciplinas.index', compact('disciplinas'));
    }

    public function create(){
        $professor = \App\Professor::all(['id', 'nome']);
        return view('admin.disciplinas.create', compact('professor'));

    }
    public function criar(Request $request){
        $data = $request->all();
        $professor = \App\Professor::find($data['professor']);
        $disciplinas = $professor->disciplina()->create($data);
        return $disciplinas;



    }

}
