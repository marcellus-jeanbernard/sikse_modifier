@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Formations management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit formation</div>
                        
                          <a href="{{url('formations/create')}}" class="btn btn-success">Create formation</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Formation</th>
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Formation</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($formations as $formation)
         <tr>
             <td>{{ $formation->name }}</td>
             <td>{{ $formation->description }}</td>
             
  
           
             <td><a href="{{url('formations',$formation->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('formations.edit',$formation->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['formations.destroy', $formation->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $formations->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop