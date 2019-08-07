@extends('layouts.admin')

@section('page')


      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">Inserer un Membre Ici</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'membres', 'role'=>'form','files'=> true)) !!}


                 
          
          
     <div class="form-group row">
            <label class="col-sm-2 form-control-label">Code</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="code" placeholder=" Votre Code ici"></p>
            </div>
  </div>


  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Nom</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nom" placeholder=" Votre Nom ici"></p>
            </div>
  </div>

     <div class="form-group row">
            <label class="col-sm-2 form-control-label">Prenom</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="prenom" placeholder=" Votre Prenom ici"></p>
            </div>
  </div>


  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Sexe</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other
            </div>
          </div>
          




  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="email" class="form-control" name="email" placeholder="your email here"></p>
            </div>
          </div>

     <div class="form-group row">
            <label class="col-sm-2 form-control-label">NIF</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nif" placeholder=" Votre Nif ici"></p>
            </div>
  </div>
<div class="form-group row">
            <label class="col-sm-2 form-control-label">CIN</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="cin" placeholder=" Votre cin ici"></p>
            </div>
  </div>
<div class="form-group row">
            <label class="col-sm-2 form-control-label">Profession</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="profession" placeholder=" Votre Profession ici"></p>
            </div>
  </div>



  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Employer</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="employer" value="male" checked> oui
                        <input type="radio" name="employer" value="female"> non
                        
            </div>
          </div>
     
<div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="address" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>



<p>

 {!! Form::label('ccpccommune_id','Ccpccommune') !!}
  
 {!! Form::select('ccpccommune_id', $ccpccommunes) !!}
</p>



<p>

 {!! Form::label('fonction_id','Fonction') !!}
  
 {!! Form::select('fonction_id', $fonctions) !!}
</p>


<p>

 {!! Form::label('secteuractivite_id','Secteuractivites') !!}
  
 {!! Form::select('secteuractivite_id', $secteuractivites) !!}
</p>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phone" placeholder="your telephone here"></p>
            </div>
          </div>





      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Add your photo</label>
            <div class="col-sm-10">
              {!! Form::file('image', Input::old('image'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
            </div>
          </div>















                    

                  

                   


       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Creer un  Membre!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>

@stop