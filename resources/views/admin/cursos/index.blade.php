<table>
    <thead>
        <tr>

            <th>Aluno_id</th>
            <th>Disciplina_id</th>
            <th>Nome</th>
            <th>Duração</th>
            <th>Especialidade</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
          <tr>
              <td>{{$curso->aluno_id}}</td>
              <td>{{$curso->disciplina_id}}</td>
              <td>{{$curso->nome}}</td>
              <td>{{$curso->duracao}}</td>
              <td>{{$curso->especialidade}}</td>
          </tr>
        @endforeach
    </tbody>
</table>
<a href="/admin/disciplinas">Botao</a>
