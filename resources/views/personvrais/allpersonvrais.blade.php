@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Person Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Person</div>
                        
                          <a href="{{url('personvrais/create')}}" class="btn btn-success">Create Person</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                               <th>Nom</th>
                            <th>prenom</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>coordination</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                           <th>Nom</th>
                            <th>prenom</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>coordination</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($personvrais as $personvrai)
         <tr>
             <td>{{ $personvrai->nom }}</td>
             <td>{{ $personvrai->email }}</td>
             <td>{{ $personvrai->adresse }}</td>

               <td>{{ $personvrai->phone }}</td>
                 <td>{{ $personvrai->coordination->name }}</td>
                   <td>{{ $personvrai->sexe }}</td>


  
             <td><img src="{{asset($personvrai->image)}}" height="35" width="30"></td>
             <td><a href="{{url('personvrais',$personvrai->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('personvrais.edit',$personvrai->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['personvrais.destroy', $personvrai->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $personvrais->links(); !!}

 </div>

                </div>
            </section>




@stop