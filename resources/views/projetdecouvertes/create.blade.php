@extends('layouts.admin')

@section('page')
<!--
      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              
               <h2 style="padding-left:40px;; color:green">Doctors Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <li><a href="{{ url('admin/doctors')}}">View All Doctors</a></li>
               
                <li><a href="{{url('admin/index')}}">Return to Dashbroad</a></li>
                <li class="active">Create</li>
              </ol>
            </div>
          </div>
        </div>
      </header>
    -->

      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">Projet @ la decouverte du vrai Dieu Inputs</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'projetdecouvertes', 'role'=>'form','files'=> true)) !!}


                 
          
          

  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Titre</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="titre" placeholder=" le titre votre projet ici"></p>
            </div>
  </div>

<div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Description</label>
            <div class="col-sm-10">
              <textarea rows="8" name="description" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>

<p>

 {!! Form::label('decouverte_id','Decouverte') !!}
  
 {!! Form::select('decouverte_id', $decouvertes) !!}
</p>

         
          


      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Add your photo</label>
            <div class="col-sm-10">
              {!! Form::file('image', Input::old('image'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
            </div>
          </div>


       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Creer Projet @ la decouverte du Vrai Dieu!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>

@stop