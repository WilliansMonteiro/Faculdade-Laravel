<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $alunos = \App\Aluno::all();
        return view('admin.alunos.index', compact('alunos'));
    }

    public function create(){
        $alunos = \App\Aluno::all();
        return view('admin.alunos.create', compact('alunos'));
    }

    public function criar(Request $request){
        $data = $request->all();
        $alunos = \App\Aluno::all();
        $inserir = $alunos->create($data);



        return $inserir;
    }
}
