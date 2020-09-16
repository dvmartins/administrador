@extends('layout.app')
@section('title', 'Registro')
 
@section('content')
<h1>Matricula</h1>
<hr>
 
<div class="container">
 
 
    @if(isset($matricula))
 
        {!! Form::model($matricula, ['method' => 'put', 'route' => ['matriculas.update', $matricula->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'matriculas.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($matricula))
        Editando registro #{{ $matricula->id }}
          @else
        Criando novo registro
          @endif
      </span>
        </div>
<div class="card-body">
<div class="form-row form-group">

    {!! Form::label('cpf', 'CPF', ['class' => 'col-form-label col-sm-2 text-right']) !!}

    <div class="col-sm-4">

    {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder'=>'digite o cpf']) !!}

    </div>

</div>
  <div class="form-row form-group">

    {!! Form::label('address', 'Endereço', ['class' => 'col-form-label col-sm-2 text-right']) !!}

    <div class="col-sm-4">

      {!! Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'digite o endereço']) !!}

    </div>

  </div>
  <div class="form-row form-group">

      {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}

      <div class="col-sm-8">

    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'digite o email']) !!}

      </div>

  </div>
  <div class="form-row form-group">

      {!! Form::label('phone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}

      <div class="col-sm-4">

    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'digite o telefone']) !!}

      </div>

  </div>

  </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($customer) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection