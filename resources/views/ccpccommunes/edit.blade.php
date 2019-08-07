@extends('layouts.admin')

@section('page')
    <h1>Update Ccpc</h1>
    {!! Form::model($ccpccommune,['method' => 'PATCH','route'=>['ccpccommunes.update',$ccpccommune->id]]) !!}
    
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
    
    <a href="{{ url('admin/ccpccommunes')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop