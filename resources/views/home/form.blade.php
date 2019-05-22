@extends('layouts.default')

@section('contenu')

<!-- 
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

</head> -->


<br><br><br> <hr>                  <div class="container">
                      <h2> afficher par departement</h2>
                      <div class="col-lg-4">
                          {{Form::open(array('url'=>'ajax-ccpccom', 'files'=>true))}}
                             <div class="form-group">
                                <label for=""> Departement </label>
                                <select class="form-control input-sm" name="departement" id="departement">
                                    @foreach($departements as $departement)
                                    <option value="{{ $departement->id}}">{{ $departement->name}}</option>
                                    @endforeach
                                </select>
                                 

                             </div>


                             <div class="form-group">
                                <label for="">Ccpc communal</label>
                                <select class="form-control input-sm" name="ccpccommune" id="ccpccommune">
                                    <option value=""></option>
                                </select>
                                 

                             </div>
                             
                          {{Form::close()}}

                      </div>

                  </div>






<script>
    $('#departement').on('change', function(e){

        console.log(e);
        var dep_id = e.target.value;

        
        $.get('/ajax-ccpccom?dep_id=' + dep_id, function(data){
            
            $('#ccpccommune').empty();
            $.each(data, function(index, ccpccomObj){
                $('#ccpccommune').append('<option value"'+ccpccomObj.id+'">'+ccpccomObj.name+'<option>');
            });
        });
    });

</script>




@stop