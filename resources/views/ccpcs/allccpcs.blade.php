@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Ccpcs management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Ccpc</div>
                        
                          <a href="{{url('ccpcs/create')}}" class="btn btn-success">Create Ccpc</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Ccpc</th>
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Ccpc</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($ccpcs as $ccpc)
         <tr>
             <td>{{ $ccpc->name }}</td>
             <td>{{ $ccpc->description }}</td>
             
  
           
             <td><a href="{{url('ccpcs',$ccpc->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('ccpcs.edit',$ccpc->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sur de pouvoir supprimer ce CCPC ?")', 'route'=>['ccpcs.destroy', $ccpc->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $ccpcs->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop