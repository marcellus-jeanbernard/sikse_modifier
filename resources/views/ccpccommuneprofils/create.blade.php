@extends('layouts.default')

@section('contenu')
<br>
<br>

<div class="container">
 

      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <!--<h3>Patients Admin Panel</h3>-->
               <h2 style="padding-left:40px;; color:green">Ccpcs Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <!-- <li><a href="{{ url('admin/ccpccommunes')}}">View All Ccpcs</a></li> -->
                <!--<li><a href="{{url('patients/create')}}">Create</a></li> -->
                <!-- <li><a href="{{url('admin/index')}}">Return to Dashbroad</a></li> -->
                <li class="active">Create</li>
              </ol>
            </div>
          </div>
        </div>
      </header>

      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">Ccpcs Inputs</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'ccpccommuneprofils', 'role'=>'form','files'=> true)) !!}
                 
          
          

  <div class="form-group row">
            <label class="col-sm-2 form-control-label">ccpc</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="name" placeholder="name"></p>
            </div>
          </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="email" placeholder="email"></p>
            </div>
          </div>

         <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Adresse</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adresse" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Telephone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="telephone" placeholder="Telephone"></p>
            </div>
          </div>


           

<p>

 {!! Form::label('departement_id','Departement') !!}
  
 {!! Form::select('departement_id', $departements) !!}
</p>



<p>

 {!! Form::label('user_id','Utilisateur') !!}
  
 {!! Form::select('user_id', $users) !!}
</p>

       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Create Ccpc!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>


</div>
<br>
<br>
<br>
<br>



@stop