@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Coord management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit coordination</div>
                        
                          <a href="{{url('coordinations/create')}}" class="btn btn-success">Create Coordination</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Coordination</th>
                            
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th> Coordination</th>
                            
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($coordinations as $coordination)
         <tr>
             <td>{{ $coordination->name }}</td>
             
  
           
             <td><a href="{{url('coordinations',$coordination->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('coordinations.edit',$coordination->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['coordinations.destroy', $coordination->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $coordinations->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop