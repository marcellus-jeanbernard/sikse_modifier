@extends('layouts.admin')

@section('page')
    <h1>Update Formation</h1>
    {!! Form::model($formation,['method' => 'PATCH','route'=>['formations.update',$formation->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Formation', 'formation:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/formations')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop