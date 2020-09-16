@extends('layout.app')
@section('title', 'Listando todos os cursos')
 
@section('content')
<h1>Cadastrar Curso</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>Cod</th>
          <th>Titulo</th>
          <th>Descrição</th>
          <th>
        <a href="{{ route('cursos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->title }}</td>
            <td>{{ $curso->description }}</td>
            <td>
            <a href="{{ route('cursos.edit', ['id' => $curso->id]) }}" class="btn btn-warning btn-sm">Editar</a>
            <form method="POST" action="{{ route('cursos.destroy', ['id' => $curso->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
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