@extends('layouts.app')
@section('content')




<table class="table table-striped">
    <thead>
        <tr>
            <thead>
                <th>id</th>
                <th>Professor_id</th>
                <th>Nome</th>
                <th>Carga horária</th>
            </thead>
        </tr>
        <tbody>
            @foreach($disciplinas as $disciplina)
            <tr>
                <td>{{$disciplina->id}}</td>
                <td>{{$disciplina->professor_id}}</td>
                <td>{{$disciplina->nome}}</td>
                <td>{{$disciplina->carga}}</td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>

@endsection
