@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>@ la decouverte du vrai Dieu Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit @ la decouverte du vrai Dieu</div>
                        
                          <a href="{{url('projetdecouvertes/create')}}" class="btn btn-success">Create projet @ la decouverte du vrai Dieu</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                               <th>titre</th>
                           
                            <th>Description</th>
                            <th>7000 pour 1</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                          <th>titre</th>
                           
                            <th>Description</th>
                            <th>7000 pour 1</th>
                            <th>Photo</th>
                            <th>Actions</th>
                             
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($projetdecouvertes as $projetdecouverte)
         <tr>
             <td>{{ $projetdecouverte->titre}}</td>
             
             <td>{{ $projetdecouverte->description }}</td>
                 <td>{{ $projetdecouverte->decouverte->nom }}</td>
                   

  
             <td><img src="{{asset($projetdecouverte->image)}}" height="35" width="30"></td>
             <td><a href="{{url('projetdecouvertes',$projetdecouverte->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('projetdecouvertes.edit',$projetdecouverte->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['projetdecouvertes.destroy', $projetdecouverte->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $projetdecouvertes->links(); !!}

 </div>

                </div>
            </section>




@stop