@extends('layouts.default')

@section('contenu')

<center>

<style>

h2 {
  color: blue;
}

table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 70%;
}

td {
  height: 50px;
  vertical-align: bottom;
}


</style>


  <br><br>

  <table>
  <center><h2 bgcolor="red" >Comite Communal Protection Civile (CCPC) </h2></center> <br>
<tr bgcolor="DarkGray"><td width="25%"> CCPC </td><td width="25%">Email</td><td width="25%">Adresse</td><td width="25%">Telephone</td>  </tr> 

<tr ><td >{{$ccpccommune->name}}</td><td>{{$ccpccommune->email}}</td><td>{{$ccpccommune->adresse}}</td><td>{{$ccpccommune->telephone}}</td></tr>


</table>

<br><br>



  <table >
  <center><h2 bgcolor="red" >Coordonnateur Executif (CE) </h2></center> <br>
<tr bgcolor="DarkGray"><td width="15%">Nom </td><td width="15%">Prenom</td><td width="15%">Email</td><td width="15%">Adresse</td> <td width="15%">Telephone</td>  <td width="15%">PHoto </td> </tr>
<tr ><td >{{$ccpccommune->nom_cordexecutif}}</td> <td>{{$ccpccommune->prenom_cordexecutif}}</td>  <td>{{$ccpccommune->email_cordexecutif}}</td><td>{{$ccpccommune->adresse_cordexecutif}}</td>  <td>{{$ccpccommune->telephone_cordexecutif}}</td> <td><img src="{{asset($ccpccommune->image1)}}" height="150" width="150"></td> </tr>

 
</table>



  <table >
  <center><h2 bgcolor="red" >Coordonnateur Logistique (CL)</h2></center> <br>
<tr bgcolor="DarkGray"><td width="15%">Nom </td><td width="15%">Prenom</td><td width="15%">Email</td><td width="15%">Adresse</td> <td width="15%">Telephone</td>  <td width="15%">PHoto </td> </tr>
<tr ><td >{{$ccpccommune->nom_cordlogistique}}</td> <td>{{$ccpccommune->prenom_cordlogistique}}</td>  <td>{{$ccpccommune->email_cordlogistique}}</td><td>{{$ccpccommune->adresse_cordlogistique}}</td>  <td>{{$ccpccommune->telephone_cordlogistique}}</td> <td><img src="{{asset($ccpccommune->image2)}}" height="150" width="150"></td> </tr>



 
</table>

<br>
       
                <div class="actions" align="center">

                  <a href="{{ url('data')}}" class="btn btn-primary">Back</a>
                
               
                </div>

</center>    

<br><br><br>


@stop