@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Pasteur Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Pasteur</div>
                        
                          <a href="{{url('pasteurs/create')}}" class="btn btn-success">Create Pastor</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                               <th>Nom</th>
                            <th>email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Eglise</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Eglise</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($pasteurs as $pasteur)
         <tr>
             <td>{{ $pasteur->nom }}</td>
             <td>{{ $pasteur->email }}</td>
             <td>{{ $pasteur->address }}</td>

               <td>{{ $pasteur->phone }}</td>
                 <td>{{ $pasteur->eglise->nom }}</td>
                   <td>{{ $pasteur->sexe }}</td>


  
             <td><img src="{{asset($pasteur->image)}}" height="35" width="30"></td>
             <td><a href="{{url('pasteurs',$pasteur->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('pasteurs.edit',$pasteur->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['pasteurs.destroy', $pasteur->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $pasteurs->links(); !!}

 </div>

                </div>
            </section>




@stop