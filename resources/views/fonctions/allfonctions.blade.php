@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Fonctions management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Fonctions</div>
                        
                          <a href="{{url('fonctions/create')}}" class="btn btn-success">Create Fonction</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Fonction</th>
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Fonction</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($fonctions as $fonction)
         <tr>
             <td>{{ $fonction->name }}</td>
             <td>{{ $fonction->description }}</td>
             
  
           
             <td><a href="{{url('fonctions',$fonction->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('fonctions.edit',$fonction->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sur de pouvoir supprimer cette fonction ?")', 'route'=>['fonctions.destroy', $fonction->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $fonctions->links(); !!}

 </div>
</p>
                </div>
            </section>




<script src="//code.jquery.com/jquery.min.js"> </script>
<script src="{{ asset('js/larails.js') }}" > </script>
@stop