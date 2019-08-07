@extends('layouts.default')

@section('contenu')

<br><br><br>
<br><br><br>


<div class="container">


	<center><h3> Bienvenue, {{ Auth::user()->username }}</h3></center>
<p class="posted">Inscrit depuis le {{ Auth::user()->created_at }}	<span>Role de : {{ Auth::user()->role }}</span>
					</p>



 <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Ccpcs management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Ccpc</div>
                        
                          <a href="{{url('ccpccommuneprofils/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                          
                        </div>

                    </div>
                </div>

                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css ">

            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Ccpc</th>
                            <th>email</th>
                            <th>adresse</th>
                            <th>telephone</th>
                            <th>departement_id</th> 
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Ccpc</th>
                            <th>email</th>
                            <th>adresse</th>
                            <th>telephone</th>
                            <th>departement_id</th>

                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($ccpccommuneprofils as $ccpccommuneprofil)
         <tr>
             <td>{{ $ccpccommuneprofil->name }}</td>
             <td>{{ $ccpccommuneprofil->email }}</td>
             <td>{{ $ccpccommuneprofil->adresse }}</td>
             <td>{{ $ccpccommuneprofil->telephone }}</td>
             <td>{{ $ccpccommuneprofil->departement_id }}</td>

             
  
           
             <td><a href="{{url('ccpccommuneprofils',$ccpccommuneprofil->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span></a></td>
             <td><a href="{{route('ccpccommuneprofils.edit',$ccpccommuneprofil->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
             <td>
             {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sur de pouvoir supprimer ce CCPC ?")', 'route'=>['ccpccommuneprofils.destroy', $ccpccommuneprofil->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>



     


                 </div>
            </section>









<br><br>
<!-- <center><h3> Bienvenue, {{ Auth::user()->username }}</h3></center>
<p class="posted">Inscrit depuis le {{ Auth::user()->created_at }}	<span>Role de : {{ Auth::user()->role }}</span>
					</p> -->

<br>
<br>
<hr>


{!! $chart->html() !!}

{!! Charts::scripts() !!}
{!! $chart->script() !!}

<script src="//code.jquery.com/jquery.min.js"> </script>
<script src="{{ asset('js/larails.js') }}" > </script>

</div>
@stop