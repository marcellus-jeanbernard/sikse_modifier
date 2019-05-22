@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Eglises management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Eglises</div>
                        
                          <a href="{{url('eglises/create')}}" class="btn btn-success">Create Eglise</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Nom</th>
                            <th> adresse</th>

                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th> Adresse</th>

                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($eglises as $eglise)
         <tr>
             <td>{{ $eglise->nom }}</td>
             <td>{{ $eglise->adresse }}</td>

             <td>{{ $eglise->description }}</td>
             
  
           
             <td><a href="{{url('eglises',$eglise->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('eglises.edit',$eglise->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['eglises.destroy', $eglise->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $eglises->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop