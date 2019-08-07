@extends('layouts.default')

@section('contenu')

<br><br>
   <div class="container">
    <section class="content-header">
      <h1>
       CCPC
        <small></small>
      </h1>
      

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Commite Communale Protection Civile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nom ccpc</th>
                  <th>Email ccpc</th>
                  <th>Adresse ccpc</th>
                  <th>Telephone ccpc</th>
                  <th>Departement</th>
              
                <th> voir ccpc en detail</th>

                </tr>
                </thead>
               
                <tbody>


                    

                                @foreach ($ccpccommunes as $ccpccommune)
                <tr>
                  <td>{{$ccpccommune->name}}</td>
                  <td>
                  {{$ccpccommune->email}}
                  </td>
                  <td>{{$ccpccommune->adresse}}</td>
                  <td> {{$ccpccommune->telephone}}</td>
                   <td>{{$ccpccommune->departement->name}}</td>
                 
                <td><a href="{{route('ccpccommune.affichermembre', ['id' => $ccpccommune->id])}}" class="btn btn-primary"> <span class="glyphicon glyphicon-open"></span>  </a></td>

                
                </tr>

              @endforeach
             
             

            </tbody>
        </table>

  
<div class="pagination">
       {!! $ccpccommunes->links(); !!}

 </div>

    </div>
</div>
</div>
</div>
</section>

</div>         

@stop
