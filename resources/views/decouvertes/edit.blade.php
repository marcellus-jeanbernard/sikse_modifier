@extends('layouts.admin')

@section('page')
    <h1>Update Decouverte</h1>
    {!! Form::model($decouverte,['method' => 'PATCH','route'=>['decouvertes.update',$decouverte->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Decouverte', 'decouverte:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/decouvertes')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop