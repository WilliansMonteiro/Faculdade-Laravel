@extends('layouts.app')
@section('content')

<form action="/admin/alunos/criar" method="post" class="form-control">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

 <div class="form-group">
     <label>Nome</label>
     <input type="text" name="nome" class="form-control">
</div>
<div class="form-group">
    <label>CPF</label>
    <input type="text" name="cpf" class="form-control">
</div>

<div class="form-group">
    <label>matricula</label>
    <input type="text" name="matricula" class="form-control">
</div>

<button type="submit" class="btn btn-lg btn-success">Criar aluno</button>





</form>



@endsection
