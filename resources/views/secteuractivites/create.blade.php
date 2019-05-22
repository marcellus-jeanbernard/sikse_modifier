@extends('layouts.admin')

@section('page')

      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <!--<h3>Patients Admin Panel</h3>-->
               <h2 style="padding-left:40px;; color:green">secteuractivites Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <li><a href="{{ url('admin/secteuractivites')}}">View All secteuractivites</a></li>
                <!--<li><a href="{{url('patients/create')}}">Create</a></li> -->
            
                <li class="active">Create</li>
              </ol>
            </div>
          </div>
        </div>
      </header>

      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">secteuractivites Inputs</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'secteuractivites', 'role'=>'form','files'=> true)) !!}
                 
          
          

  <div class="form-group row">
            <label class="col-sm-2 form-control-label">secteuractivite</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="name" placeholder="name"></p>
            </div>
          </div>




       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Create secteuractivite!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>





@stop