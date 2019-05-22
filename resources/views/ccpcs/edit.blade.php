@extends('layouts.admin')

@section('page')
    <h1>Update Ccpc</h1>
    {!! Form::model($ccpc,['method' => 'PATCH','route'=>['ccpcs.update',$ccpc->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Ccpc', 'ccpc:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/ccpcs')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop