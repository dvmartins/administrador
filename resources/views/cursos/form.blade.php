@extends('layout.app')
@section('title', 'Curso')
 
@section('content')
<h1>Curso</h1>
<hr>
 
<div class="container">
 
    @if(isset($curso))
        {!! Form::model($curso, ['method' => 'put', 'route' => ['cursos.update', $curso->id ], 'class' => 'form-horizontal']) !!}
    @else
        {!! Form::open(['method' => 'post','route' => 'cursos.store', 'class' => 'form-horizontal']) !!}
    @endif
 
    <div class="card">
    <div class="card-header">
      <span class="card-title">
        @if (isset($curso))
        Editando curso #{{ $curso->id }}
        @else
        Criando novo curso
        @endif
      </span>
    </div>
        <div class="card-body">
      <div class="form-row form-group">
 
          {!! Form::label('title', 'Titulo', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Defina o Título']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('description', 'Descrição', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder'=>'Descrição']) !!}
 
          </div>
 
      </div>
      <div class="card-footer">
        {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
        {!! Form::submit(  isset($cursos) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
      </div>
    </div>
 
    {!! Form::close() !!}
 
  </div>
</div>
@endsection