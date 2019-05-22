@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Commissions management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit commission</div>
                        
                          <a href="{{url('commissions/create')}}" class="btn btn-success">Create Commission</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Commission</th>
                            
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th> Commission</th>
                            
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($commissions as $commission)
         <tr>
             <td>{{ $commission->name }}</td>
             
  
           
             <td><a href="{{url('commissions',$commission->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('commissions.edit',$commission->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['commissions.destroy', $commission->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $commissions->links(); !!}

 </div>
</p>
                </div>
            </section>




@stop