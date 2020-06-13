<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = \App\Curso::all();
        return view('admin.cursos.index', compact('cursos'));
    }
}
