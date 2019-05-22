@extends('layouts.admin')

@section('page')
    <h1>Update occupationactuelle</h1>
    {!! Form::model($occupationactuelle,['method' => 'PATCH','route'=>['occupationactuelles.update',$occupationactuelle->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('occupationactuelle', 'occupationactuelle:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/occupationactuelles')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop