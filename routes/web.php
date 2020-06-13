<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/cursos', 'Admin\\CursoController@index');
Route::get('/admin/disciplinas', 'Admin\\DisciplinaController@index');
Route::get('/admin/disciplinas/create', 'Admin\\DisciplinaController@create');
Route::post('/admin/disciplinas/criar', 'Admin\\DisciplinaController@criar');


Route::get('/admin/alunos', 'Admin\\AlunoController@index');
Route::get('/admin/alunos/create', 'Admin\\AlunoController@create');
Route::post('/admin/alunos/criar', 'Admin\\AlunoController@criar');
