@extends('layouts.admin')

@section('page')
    <h1>Modification s'il y a lieu</h1>
    {!! Form::model($personvrai,['method' => 'PATCH','route'=>['personvrais.update',$personvrai->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Nom', 'Nom:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Prenom', 'Prenom:') !!}
        {!! Form::text('prenom',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('dateNaissance', 'Date Naissance:') !!}
        {!! Form::date('dateNaissance',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('lieuNaissane', 'Lieu de Naissance:') !!}
        {!! Form::text('lieuNaissane',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('adresse', 'Adresse:') !!}
        {!! Form::textarea('adresse',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>




    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('personvrais/essai')}}" class="btn btn-primary">Continuer</a>
    </div>
    {!! Form::close() !!}
@stop