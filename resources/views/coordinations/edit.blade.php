@extends('layouts.admin')

@section('page')
    <h1>Update Coordination</h1>
    {!! Form::model($coordination,['method' => 'PATCH','route'=>['coordinations.update',$coordination->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Coordination', 'coordination:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/coordinations')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop