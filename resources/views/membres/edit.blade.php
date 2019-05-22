@extends('layouts.admin')

@section('page')
    <h1>Modifier Membre</h1>
    {!! Form::model($membre,['method' => 'PATCH','route'=>['membres.update',$membre->id]]) !!}
    
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
        {!! Form::textarea('address',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

    
    <p>

 {!! Form::label('ccpc_id','Ccpc') !!}
  
 {!! Form::select('ccpc_id', $ccpcs) !!}
</p>

                     

                        <div class="form-group">
                       {!! Form::label('sexe') !!} 
    
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other

                        </div>

                       



    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/membres')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop