@extends('layouts.admin')

@section('page')
         <header class="section-header">

   

                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Gestion de Membres</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Membre</div>
                        <hr>

                          <a href="{{url('membres/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                          
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
                               <th>photo</th>
                               <th>Code</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            
                            <th>email</th>

                            <th>Adresse</th>

                            <th>Ccpc Commune</th>
                            <th>Fonction</th>
                            <th>Secteur Activite</th>
                            <th>phone</th>
                            <th>Sexe</th>
                           
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>photo</th>
                             <th>Code</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            
                            <th>email</th>

                            <th>Adresse</th>

                            <th>Ccpc</th>
                            <th>Fonction</th>
                            <th>Secteur Activite</th>
                            <th>phone</th>
                            <th>Sexe</th>
                            
                            <th>Actions</th>
                            
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($membres as $membre)
         <tr>
              <td><img src="{{asset($membre->image)}}" height="35" width="30"></td>
                        
                            @if($membre->fonction->name == 'Coordonateur Executif')
                          <td>{{ $membre->ccpccommune->adresse }}</td>
                            @endif

             <td>{{ $membre->nom }}</td>
             <td>{{ $membre->prenom }}</td>
             <td>{{ $membre->email }}</td>

               <td>{{ $membre->address }}</td>
                
                @if($membre->fonction->name == 'Coordonateur Executif')
                 <td>{{ $membre->ccpccommune->name }}</td>
                  @endif

                 <td>{{ $membre->fonction->name }}</td>

                 <td>{{ $membre->secteuractivite->name }}</td>

                   <td>{{ $membre->phone }}</td>
                   
                   <td>{{ $membre->sexe }}</td>
                


                

  
         
             <td><a href="{{url('membres',$membre->id)}}" class="btn btn-primary"> <span class="glyphicon glyphicon-open"></span>  </a></td>
             <td><a href="{{route('membres.edit',$membre->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
             <td>
 {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sure de pouvoir supprimer ce membre ?")', 'route'=>['membres.destroy', $membre->id]]) !!}
               
             {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
             


             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $membres->links(); !!}

 </div>

                </div>
            </section>




<script src="//code.jquery.com/jquery.min.js"> </script>
<script src="{{ asset('js/larails.js') }}" > </script>

@stop