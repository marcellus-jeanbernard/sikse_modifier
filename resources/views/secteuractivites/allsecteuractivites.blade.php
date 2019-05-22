@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>secteuractivites management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit secteuractivite</div>
                        
                          <a href="{{url('secteuractivites/create')}}" class="btn btn-success">Create secteuractivite</a>
                          
                        </div>

                    </div>
                </div>

                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css ">
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> secteuractivite</th>
                            
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th> secteuractivite</th>
                            
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($secteuractivites as $secteuractivite)
         <tr>
             <td>{{ $secteuractivite->name }}</td>
             
  
           
             <td><a href="{{url('secteuractivites',$secteuractivite->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('secteuractivites.edit',$secteuractivite->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['secteuractivites.destroy', $secteuractivite->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
                       

                        </tbody>
  

                    </table>
                    <!-- 
                                 {{ $secteuractivites->links()}} -->



<div class="pagination" style="padding-left: 10px;" >
       {!! $secteuractivites->links(); !!}

 </div>
    <hr>



 

                </div>

            </section>





@stop