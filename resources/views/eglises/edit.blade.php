@extends('layouts.admin')

@section('page')
    <h1>Update Eglise</h1>
    {!! Form::model($eglise,['method' => 'PATCH','route'=>['eglises.update',$eglise->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Eglise', 'eglise:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
    </div>

   <div class="form-group">
        {!! Form::label('adresse', 'Adresse:') !!}
        {!! Form::text('adresse',null,['class'=>'form-control']) !!}
    </div>



<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/eglises')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop