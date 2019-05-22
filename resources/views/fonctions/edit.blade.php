@extends('layouts.admin')

@section('page')
    <h1>Update Fonction</h1>
    {!! Form::model($fonction,['method' => 'PATCH','route'=>['fonctions.update',$fonction->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Fonction', 'fonction:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/fonctions')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop