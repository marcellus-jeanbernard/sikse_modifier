@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Projet Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Projet </div>
                        
                          <a href="{{url('projets/create')}}" class="btn btn-success">Create Projet </a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                               <th>titre</th>
                           
                            <th>Description</th>
                            <th>projet</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                          <th>titre</th>
                           
                            <th>Description</th>
                            <th>7000 pour 1</th>
                            <th>Photo</th>
                            <th>Actions</th>
                             
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($projets as $projet)
         <tr>
             <td>{{ $projet->titre}}</td>
             
             <td>{{ $projet->description }}</td>
                 <td>{{ $projet->department->name }}</td>
                   

  
             <td><img src="{{asset($projet->image)}}" height="35" width="30"></td>
             <td><a href="{{url('projets',$projet->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('projets.edit',$projet->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['projets.destroy', $projet->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $projets->links(); !!}

 </div>

                </div>
            </section>




@stop