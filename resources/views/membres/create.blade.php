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
        

        <h5 class="m-t-lg with-border">Inserer un Membre Ici</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'membres', 'role'=>'form','files'=> true)) !!}


                 
          
        <!--   
     <div class="form-group row">
            <label class="col-sm-2 form-control-label">Code</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="code" placeholder=" Votre Code ici"></p>
            </div>
  </div> -->


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
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="address" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>



<p>

 {!! Form::label('ccpc_id','Ccpc') !!}
  
 {!! Form::select('ccpc_id', $ccpcs) !!}
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
            <label class="col-sm-2 form-control-label">Gap</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="gap" value="male" checked> oui
                        <input type="radio" name="gap" value="female"> non

            </div>
          </div>




  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Notion de Base</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="notion_de_base" value="male" checked> OUi
                        <input type="radio" name="notion_de_base" value="female"> Non
                        
            </div>
          </div>
         

<div class="form-group row">
            <label class="col-sm-2 form-control-label">Pretext Notion de Base</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phone" placeholder="your telephone here"></p>
            </div>
          </div>



<div class="form-group row">
            <label class="col-sm-2 form-control-label">Pretext Notion de Base</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="pretest_nb" placeholder="your telephone here"></p>
            </div>
          </div>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Moyenne Pre</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="moyenne_pre" placeholder="Put your pretext number here"></p>
            </div>
          </div>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Post test Notion de Base</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="post_test_nb" placeholder="your telephone here"></p>
            </div>
          </div>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Moyenne Post test</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="moyenne_pos" placeholder="your telephone here"></p>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Performance</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="performance" placeholder="your telephone here"></p>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Pre test Acc</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="pretest_acc" placeholder="your telephone here"></p>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Moyenne Pre test Acc</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="moyenne_pretest_acc" placeholder="your telephone here"></p>
            </div>
          </div>

                    <div class="form-group row">
            <label class="col-sm-2 form-control-label"> Post test Acc</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="post_test_acc" placeholder="your telephone here"></p>
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