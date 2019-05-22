@extends('layouts.admin')

@section('page')
    <h1>Update Projet 7000 pour 1</h1>
    {!! Form::model($projetsept,['method' => 'PATCH','route'=>['projetsepts.update',$projetsept->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Titre', 'Titre:') !!}
        {!! Form::text('titre',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    
    <p>

 {!! Form::label('septpourun_id','Septpourun') !!}
  
 {!! Form::select('septpourun_id', $septpouruns) !!}
</p>

    <!-- <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
     -->
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/projetsepts')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop