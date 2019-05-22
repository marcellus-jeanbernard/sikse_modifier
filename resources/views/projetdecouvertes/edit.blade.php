@extends('layouts.admin')

@section('page')
    <h1>Update Projet @ la decouverte du vrai Dieu</h1>
    {!! Form::model($projetdecouverte,['method' => 'PATCH','route'=>['projetdecouvertes.update',$projetdecouverte->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Titre', 'Titre:') !!}
        {!! Form::text('titre',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    
    <p>

 {!! Form::label('decouverte_id','Decouverte') !!}
  
 {!! Form::select('decouverte_id', $decouvertes) !!}
</p>

    <!-- <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
     -->
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/projetdecouvertes')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop