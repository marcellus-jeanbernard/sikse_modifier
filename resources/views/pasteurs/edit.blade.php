@extends('layouts.admin')

@section('page')
    <h1>Update Pasteur</h1>
    {!! Form::model($pasteur,['method' => 'PATCH','route'=>['pasteurs.update',$pasteur->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Nom', 'Nom:') !!}
        {!! Form::text('nom',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('Email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

    
    <p>

 {!! Form::label('eglise_id','Eglise') !!}
  
 {!! Form::select('eglise_id', $eglises) !!}
</p>

                     

                        <div class="form-group">
                       {!! Form::label('sexe') !!} 
    
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other

                        </div>

                       



    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/pasteurs')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop