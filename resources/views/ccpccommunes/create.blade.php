@extends('layouts.admin')

@section('page')

      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <!--<h3>Patients Admin Panel</h3>-->
               <h2 style="padding-left:40px;; color:green">Ccpcs Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <li><a href="{{ url('admin/ccpccommunes')}}">View All Ccpcs</a></li>
                <!--<li><a href="{{url('patients/create')}}">Create</a></li> -->
                <li><a href="{{url('admin/index')}}">Return to Dashbroad</a></li>
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
        {!! Form::open(array('url' => 'ccpccommunes', 'role'=>'form','files'=> true)) !!}
                 
          
          

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


            


  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Nom Coordonateur Executif</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nom_cordexecutif" placeholder="nom_cordexecutif"></p>
            </div>
          </div>


            <div class="form-group row">
            <label class="col-sm-2 form-control-label">Prenom Coordonateur Executif</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="prenom_cordexecutif" placeholder="prenom_cordexecutif"></p>
            </div>
          </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="email_cordexecutif" placeholder="email coordonateur"></p>
            </div>
          </div>

         <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Adresse coordonateur executif</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adresse_cordexecutif" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Telephone coordonateur executif</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="telephone_cordexecutif" placeholder="Telephone"></p>
            </div>
          </div>

      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Photo coordonateur executif</label>
            <div class="col-sm-10">
              {!! Form::file('image1', Input::old('image1'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
            </div>
          </div>



            <div class="form-group row">
            <label class="col-sm-2 form-control-label">Nom Coordonateur Logistique</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nom_cordlogistique" placeholder="nom_cordexecutif"></p>
            </div>
          </div>


            <div class="form-group row">
            <label class="col-sm-2 form-control-label">Prenom Coordonateur Logistique</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="prenom_cordlogistique" placeholder="prenom_cordexecutif"></p>
            </div>
          </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="email_cordlogistique" placeholder="email coordonateur"></p>
            </div>
          </div>

         <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Adresse coordonateur executif</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adresse_cordlogistique" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>




           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Telephone coordonateur executif</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="telephone_cordlogistique" placeholder="Telephone"></p>
            </div>
          </div>

      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Photo coordonateur logistique</label>
            <div class="col-sm-10">
              {!! Form::file('image2', Input::old('image2'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
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





@stop