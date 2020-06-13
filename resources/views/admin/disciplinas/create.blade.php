@extends('layouts.app')
@section('content')


<form action="/admin/disciplinas/criar" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-goup">
    <label>Professor</label>
    <select name="professor" class="form-control">
        @foreach ($professor as $professo)
            <option value="{{$professo->id}}"> {{$professo->nome}} </option>
        @endforeach
    </select>
</div>

<div  class="form-goup">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control">
</div>

<div  class="form-goup">
    <label>Carga</label>
    <input type="text" name="carga" class="form-control">
</div>

<div  class="form-goup">
    <button type="submit" class="btn btn-lg btn-primary">Criar Disciplina</button>
</div>

</form>

@endsection
