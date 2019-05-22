@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Projet 7000 pour 1 Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Projet 7000 pour 1</div>
                        
                          <a href="{{url('projetsepts/create')}}" class="btn btn-success">Create Projet 7000 pour 1</a>
                          
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
                            <th>7000 pour 1</th>
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
                        
                        @foreach ($projetsepts as $projetsept)
         <tr>
             <td>{{ $projetsept->titre}}</td>
             
             <td>{{ $projetsept->description }}</td>
                 <td>{{ $projetsept->septpourun->nom }}</td>
                   

  
             <td><img src="{{asset($projetsept->image)}}" height="35" width="30"></td>
             <td><a href="{{url('projetsepts',$projetsept->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('projetsepts.edit',$projetsept->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['projetsepts.destroy', $projetsept->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $projetsepts->links(); !!}

 </div>

                </div>
            </section>




@stop