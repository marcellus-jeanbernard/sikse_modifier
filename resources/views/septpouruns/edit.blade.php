@extends('layouts.admin')

@section('page')
    <h1>Update 7000 pour 1</h1>
    {!! Form::model($septpourun,['method' => 'PATCH','route'=>['septpouruns.update',$septpourun->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Septpourun', 'septpourun:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/septpouruns')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop