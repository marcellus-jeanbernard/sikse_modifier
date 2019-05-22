@extends('layouts.admin')

@section('page')

    {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'products', 'role'=>'form','files'=> true)) !!}


    <div class="form-group">
        <label for="name">Name</label>
    <input type="text" name="" id="name" class="form-control">
    </div>
<div class="form-group">
    <label for="year"> Year</label>
    <input type="number" id="year" name="" class="form-control">
    
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="" id="price" class="form-control">
    
</div>
    
   <div class="form-group">
        {!! Form::submit('Creer un PRoducts!', array('class'=>'btn btn-primary')) !!}
   </div>

  {!! Form::close() !!}
@stop