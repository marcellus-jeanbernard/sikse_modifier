@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Ccpcs management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Ccpc</div>
                        
                          <a href="{{url('ccpccommunes/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
                          
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
                            <th> Ccpc</th>
                            <th>email</th>
                            <th>adresse</th>
                            <th>telephone</th>
                            <th>departement</th> 
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Ccpc</th>
                            <th>email</th>
                            <th>adresse</th>
                            <th>telephone</th>
                            <th>departement</th>

                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($ccpccommunes as $ccpccommune)
         <tr>
             <td>{{ $ccpccommune->name }}</td>
             <td>{{ $ccpccommune->email }}</td>
             <td>{{ $ccpccommune->adresse }}</td>
             <td>{{ $ccpccommune->telephone }}</td>
             <td>{{ $ccpccommune->departement->name }}</td>

             
  
           
             <td><a href="{{url('ccpccommunes',$ccpccommune->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span></a></td>
             <td><a href="{{route('ccpccommunes.edit',$ccpccommune->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
             <td>
             {!! Form::open(['method' => 'DELETE','onsubmit' => 'return confirm("Etes-vous sur de pouvoir supprimer ce CCPC ?")', 'route'=>['ccpccommunes.destroy', $ccpccommune->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<p>
<div class="pagination">
       {!! $ccpccommunes->links(); !!}

 </div>
</p>
                </div>
            </section>





<script src="//code.jquery.com/jquery.min.js"> </script>
<script src="{{ asset('js/larails.js') }}" > </script>
@stop