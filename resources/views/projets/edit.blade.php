@extends('layouts.admin')

@section('page')
    <h1>Update Projet </h1>
    {!! Form::model($projet,['method' => 'PATCH','route'=>['projets.update',$projet->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Titre', 'Titre:') !!}
        {!! Form::text('titre',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    
    <p>

 {!! Form::label('department_id','Department') !!}
  
 {!! Form::select('department_id', $departments) !!}
</p>

    <!-- <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
     -->
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/projets')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop