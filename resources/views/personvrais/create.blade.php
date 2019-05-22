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
        

        <center> <h2 style="color: blue;" class="m-t-lg with-border">ASFIPA/MEBSH</h2>  </center>
        <center> <h4 style="color: blue;"> PORT-AU-PRINCE, HAITI</h4> </center> 
        <center>
        <h4 style="color: blue;">FORMULAIRE DE RENSEIGNEMENTS </h4>
        </center>


                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'personvrais', 'role'=>'form','files'=> true)) !!}


                 
          
          

  <div class="form-group row">
   <h6>Vos renseignement personnels</h6>
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
            <label class="col-sm-2 form-control-label">Date de Naissance</label>
            <div class="col-sm-10">
              
                         <input type="date" name="dateNaissance"> 
            </div>
          </div>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Lieu de Naissance</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="lieuNaissane" placeholder=" Votre Prenom ici"></p>
            </div>
  </div> 




<div class="form-group row">
            <label class="col-sm-2 form-control-label">Statut Civil</label>
            

            <div class="col-sm-10">
              

              <select name="statutCivil">
  <option value="Marié">Marié</option>
  <option value="Célibataire  avec enfant">Célibataire  avec enfant</option>
  <option value="Célibataire sans enfant">Célibataire sans enfant</option>
  <option value="Divorcé">Divorcé</option>
  <option value="Union libre">Union libre</option>
  <option value="Veuf">Veuf (Ve)</option>
</select> 



            </div>

  </div> 



          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Sexe</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="sexe" value="male" checked> Masculin
                        <input type="radio" name="sexe" value="female"> Féminin
                        <input type="radio" name="sexe" value="other"> Autre
            </div>
          </div>



            </div>

<div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adresse" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>



  <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="email" class="form-control" name="email" placeholder="your email here"></p>
            </div>
     </div>       


<div class="form-group row">
            <label class="col-sm-2 form-control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phone" placeholder="your telephone here"></p>
            </div>
          </div>


<div class="form-group row">
            <label class="col-sm-2 form-control-label">profession</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="profession" placeholder="your telephone here"></p>
            </div>
  </div>

<div class="form-group row">
            <label class="col-sm-2 form-control-label">groupeSanguin</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="groupeSanguin" placeholder="your telephone here"></p>
            </div>
 </div>



<div class="form-group row">
             {!! Form::label('occupationactuelle_id',' Votre Occupation  actuelle') !!}
            <div class="col-sm-10">
               {!! Form::select('occupationactuelle_id', $occupationactuelles) !!}
            </div>
  </div>




<p>

 {!! Form::label('secteuractivite_id',"Vous faites parti de quelle secteur d'activite") !!}
  
 {!! Form::select('secteuractivite_id', $secteuractivites) !!}
</p>

<p>

 {!! Form::label('coordination_id','Coordination') !!}
  
 {!! Form::select('coordination_id', $coordinations) !!}
</p>
<p>

 {!! Form::label('commission_id','Commission') !!}
  
 {!! Form::select('commission_id', $commissions) !!}
</p>
  







<div class="form-group row">
<h4> Votre participation a la vie de l'eglise </h4>
            <label class="col-sm-2 form-control-label">Statut</label>
            

            <div class="col-sm-10">
              


  <select name="statut">
  <option value="Pasteur">Pasteur</option>
  <option value="Diacre">Diacre</option>
  <option value="Diaconesse">Diaconesse</option>
  <option value="Membre">Membre</option>
  <option value="Croyant">Croyant</option>
</select> 



            </div>

  </div> 



<div class="form-group row">
            <label class="col-sm-2 form-control-label">
          Etes-vous intéressés (es) à occuper une fonction (ou une autre) à l’église ? ou un ministère quelconque ? Laquelle ?
            </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="laquelle" placeholder=" Entrer votre Ministere ici"></p>
            </div>
  </div> 


<div class="form-group row">
            <label class="col-sm-2 form-control-label">
Depuis quand fréquentez-vous   l’église actuelle.      </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="quandFrequenter" placeholder="Entrer une duree de temps"></p>
            </div>
  </div>      
          


<div class="form-group row">
<h3>Personnes de Contact en Periode Normale</h3>
            <label class="col-sm-2 form-control-label">
Nom et prenom     </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nomPersNorm" placeholder=" Votre Nom et Prenom ici"></p>
            </div>
  </div>  

  <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adressePersNorm" class="form-control" placeholder="Votre adresse ici"></textarea>
            </div>
      </div> 

    <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="email" class="form-control" name="emailPersNorm" placeholder="your email here"></p>
            </div>
     </div>



<div class="form-group row">
            <label class="col-sm-2 form-control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phonePersNorm" placeholder="your telephone here"></p>
            </div>
          </div>
     



     
<div class="form-group row">
            <label class="col-sm-2 form-control-label">Lien avec l’intéressé </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="lienPersNorm" placeholder="your telephone here"></p>
            </div>
          </div>


<div class="form-group row">
<h3>Personnes de Contact en Periode Urgente</h3>
            <label class="col-sm-2 form-control-label">
Nom et prenom     </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nomPersUrg" placeholder=" Votre Prenom ici"></p>
            </div>
  </div>  

  <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="adressePersUrg" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div> 

    <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="email" class="form-control" name="emailPersUrg" placeholder="your email here"></p>
            </div>
     </div>



<div class="form-group row">
            <label class="col-sm-2 form-control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phonePersUrg" placeholder="your telephone here"></p>
            </div>
          </div>
     



     
<div class="form-group row">
            <label class="col-sm-2 form-control-label">Lien avec l’intéressé </label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="lienPersUrg" placeholder="your telephone here"></p>
            </div>
          </div>        
     

         
      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Add your photo</label>
            <div class="col-sm-10">
              {!! Form::file('image', Input::old('image'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
            </div>
          </div>


       <div class="box-footer">
                 

                    {!! Form::submit('Create Person!', array('class'=>'btn btn-primary')) !!}
                  </div>
            
                {!! Form::close() !!}
</div>

@stop