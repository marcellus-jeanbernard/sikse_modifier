@extends('layouts.default')

@section('contenu')








<br><br> <hr>
      <center>
                     <h1 style="color: red;">Visualiser les Comites Communaux protection Civil par departement</h1>
                     <span style="color: red;">  Departement:</span>
                     <select style="width: 200px" class="ccpccommunedepartement" id="department">
                        <option value="0" disabled="true" selected="true" style="color: blue; "> Select</option>
                        @foreach($dep as $dp)
                        <option value="{{$dp->id}}">{{$dp->name}}</option>
                         @endforeach

                        
                     </select> <br>

                     <span style="color: red;"> CCPC: </span>
                     <select style="width: 200px" class="name" name="ccpccommune" id="ccpccommune">
                        <option value="0" disabled="true" selected="true"> CCPC Name</option>
                     </select>

                    <br>
                  <span style="color: red;"> Adresse:</span>
                  <input type="textarea"  class="ccpc_adresse" name="">  
                    
                    <br>

                   <span style="color: red;"> email:</span>
                  <input type="text"  class="ccpc_email" name="">    
                         
                  <br>

                  <span style="color: red;"> Telephone:</span>
                  <input type="text"  class="ccpc_telephone" name="">  

                          

       </center>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

  
  $(document).on('change','.ccpccommunedepartement', function(){
     console.log("hmm its change");

     var dep_id=$(this).val();
      console.log(dep_id);
      

  $.get('/ajax-ccpccom/' +dep_id, function(data){
      console.log(data);
       $('#ccpccommune').empty();
       $.each(data, function(index, ccpcObj){
           $('#ccpccommune').append('<option value="'+ccpcObj.id+'">'+ccpcObj.name+'</option>');
       });
  });

});
  // trysommething with adresse
  $(document).on('change','.name', function(){ 
      var ccpc_id=$(this).val();
      var a=$(this).parent();
      console.log(ccpc_id);
   console.log("adresse");
   //console.log(c);
      
    $.ajax({
        type:'get',
        url:'{!! URL::to('ajax-findadresse') !!}',
        data:{'id':ccpc_id},
        dataType:'json',
        success:function(data){
          // console.log("Adresse");
          console.log(data.adresse);
          a.find('.ccpc_adresse').val(data.adresse);
        }

    });
  

  });
  // fin trysomething with adress

  // trysomthing with email

   $(document).on('change','.name', function(){ 
      var ccpc_id=$(this).val();
      var a=$(this).parent();
      console.log(ccpc_id);
   console.log("email");
   //console.log(c);
      
    $.ajax({
        type:'get',
        url:'{!! URL::to('ajax-findemail') !!}',
        data:{'id':ccpc_id},
        dataType:'json',
        success:function(data){
          // console.log("Adresse");
          console.log(data.email);
          a.find('.ccpc_email').val(data.email);
        }

    });
  

  });
  // fin trysomething with email

  // trysomething with telephone
      $(document).on('change','.name', function(){ 
      var ccpc_id=$(this).val();
      var a=$(this).parent();
      console.log(ccpc_id);
   console.log("telephone");
   //console.log(c);
      
    $.ajax({
        type:'get',
        url:'{!! URL::to('ajax-findtelephone') !!}',
        data:{'id':ccpc_id},
        dataType:'json',
        success:function(data){
          // console.log("Adresse");
          console.log(data.telephone);
          a.find('.ccpc_telephone').val(data.telephone);
        }

    });
  

  });
  // fin trysomething with telephone
    });

</script>
<br><br><br>
@stop