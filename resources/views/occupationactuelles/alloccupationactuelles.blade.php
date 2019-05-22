@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Occupationactuelles management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit occupationactuelle</div>
                        
                          <a href="{{url('occupationactuelles/create')}}" class="btn btn-success">Create occupationactuelle</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> occupationactuelle</th>
                            
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th> occupationactuelle</th>
                            
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($occupationactuelles as $occupationactuelle)
         <tr>
             <td>{{ $occupationactuelle->name }}</td>
             
  
           
             <td><a href="{{url('occupationactuelles',$occupationactuelle->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('occupationactuelles.edit',$occupationactuelle->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['occupationactuelles.destroy', $occupationactuelle->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $occupationactuelles->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop