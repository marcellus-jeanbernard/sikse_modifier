@extends('layouts.admin')

@section('page')
    <h1>Update Commission</h1>
    {!! Form::model($commission,['method' => 'PATCH','route'=>['commissions.update',$commission->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Commission', 'commission:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/commissions')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop