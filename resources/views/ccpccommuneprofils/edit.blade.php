@extends('layouts.default')

@section('contenu')
<br><br>

<div class="container">
    <h1>Update Ccpc</h1>
    {!! Form::model($ccpccommuneprofil,['method' => 'PATCH','route'=>['ccpccommuneprofils.update',$ccpccommuneprofil->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Ccpc', 'ccpc:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('adresse', 'Adresse:') !!}
        {!! Form::textarea('adresse',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('telephone', 'Telephone:') !!}
        {!! Form::text('telephone',null,['class'=>'form-control']) !!}
    </div>






<p>

 {!! Form::label('departement_id','Departement') !!}
  
 {!! Form::select('departement_id', $departements) !!}
</p>


    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('profil/'.Auth::user()->id ) }}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}

</div>

@stop