@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>7000 pour 1 management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit 7000 pour 1</div>
                        
                          <a href="{{url('septpouruns/create')}}" class="btn btn-success">Create 7000 pour 1</a>
                          
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
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($septpouruns as $septpourun)
         <tr>
             <td>{{ $septpourun->nom }}</td>
             <td>{{ $septpourun->description }}</td>
             
  
           
             <td><a href="{{url('septpouruns',$septpourun->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('septpouruns.edit',$septpourun->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['septpouruns.destroy', $septpourun->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $septpouruns->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop