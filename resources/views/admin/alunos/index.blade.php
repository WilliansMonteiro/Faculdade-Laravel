@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Matricula</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($alunos as $aluno)
        <tr>
        <td>{{$aluno->id}}</td>
        <td>{{$aluno->nome}}</td>
        <td>{{$aluno->cpf}}</td>
        <td>{{$aluno->matricula}}</td>
    </tr>

        @endforeach

    </tbody>

</table>

@endsection
