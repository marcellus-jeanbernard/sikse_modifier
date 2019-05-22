@extends('layouts.admin')

@section('page')
    <h1>Update secteuractivite</h1>
    {!! Form::model($secteuractivite,['method' => 'PATCH','route'=>['secteuractivites.update',$secteuractivite->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('secteuractivite', 'secteuractivite:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/secteuractivites')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop