@extends('layout.app')
@section('title', 'Listando todos as matriculad')
 
@section('content')
<h1>Cadastrar Matricula</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>Cod</th>
          <th>CPF</th>
          <th>Endereço</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>
        <a href="{{ route('matriculas.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($matriculas as $matricula)
        <tr>
            <td>{{ $matricula->id }}</td>
            <td>{{ $matricula->cpf }}</td>
            <td>{{ $matricula->address }}</td>
            <td>{{ $matricula->email }}</td>
            <td>{{ $matricula->phone }}</td>
            <td>
            <a href="{{ route('matriculas.edit', ['id' => $matricula->id]) }}" class="btn btn-warning btn-sm">Editar</a>
            <form method="POST" action="{{ route('matriculas.destroy', ['id' => $matricula->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
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