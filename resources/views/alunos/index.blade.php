@extends('layout.app')
@section('title', 'Listando todos os alunos')
 
@section('content')
<h1>Cadastrar Aluno</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>Cod</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>
        <a href="{{ route('alunos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($alunos as $aluno)
        <tr>
            <td>{{ $aluno->id }}</td>
            <td>{{ $aluno->first_name }}</td>
            <th>{{ $aluno->email }}</th>
            <td>{{ $aluno->birth_data }}</td>
            <td>
            <a href="{{ route('alunos.edit', ['id' => $aluno->id]) }}" class="btn btn-warning btn-sm">Editar</a>
            <form method="POST" action="{{ route('alunos.destroy', ['id' => $aluno->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                @csrf
                <input type="hidden" name="_method" value="delete" >
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
            </td>
        </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection