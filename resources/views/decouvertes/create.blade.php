@extends('layouts.admin')

@section('page')

      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <!--<h3>Patients Admin Panel</h3>-->
               <h2 style="padding-left:40px;; color:green">Decouvertes Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <li><a href="{{ url('admin/decouvertes')}}">View All Decouvertes</a></li>
                <!--<li><a href="{{url('patients/create')}}">Create</a></li> -->
                <!-- <li><a href="{{url('admin/index')}}">Return to Dashbroad</a></li> -->
                <li class="active">Create</li>
              </ol>
            </div>
          </div>
        </div>
      </header>

      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">Decouvertes Inputs</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'decouvertes', 'role'=>'form','files'=> true)) !!}
                 
          
          

  <div class="form-group row">
            <label class="col-sm-2 form-control-label">decouverte</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="nom" placeholder="Entrer le nom de decouverte ici"></p>
            </div>
          </div>

S

      <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Description</label>
            <div class="col-sm-10">
              <textarea rows="8" name="description" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>





       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Create Decouverte!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>





@stop