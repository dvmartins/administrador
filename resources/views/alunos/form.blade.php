@extends('layout.app')
@section('title', 'Registro')
 
@section('content')
<h1>Aluno</h1>
<hr>
 
<div class="container">
 
 
    @if(isset($aluno))
 
        {!! Form::model($aluno, ['method' => 'put', 'route' => ['alunos.update', $aluno->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'alunos.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
            <span class="card-title">
                @if (isset($aluno))
                Editando registro #{{ $aluno->id }}
                @else
                Criando novo registro
                @endif
            </span>
        </div>
        <div class="card-body">
            <div class="form-row form-group">
        
                {!! Form::label('first_name', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
        
                <div class="col-sm-4">
        
                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder'=>'Defina o nome']) !!}
        
                </div>
        
            </div>
            <div class="form-row form-group">

                {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}

                <div class="col-sm-4">

                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Degite se email']) !!}

            </div>

            </div>
            <div class="form-row form-group">
        
                {!! Form::label('birth_data', 'Data de Nascimento', ['class' => 'col-form-label col-sm-2 text-right']) !!}
        
                <div class="col-sm-8">
        
                {!! Form::text('birth_data', null, ['class' => 'form-control', 'placeholder'=>'Data de Nacimento']) !!}
        
                </div>
        
            </div>
            <div class="card-footer">
                {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
                {!! Form::submit(  isset($aluno) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection