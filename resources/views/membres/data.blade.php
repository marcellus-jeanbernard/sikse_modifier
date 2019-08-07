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
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Adresse</th>
                  <th>Telephone</th>
                  <th>Departement</th>
              
                <th> voir ccpc</th>

                </tr>
                </thead>
               
                <tbody>


                    

                                @foreach ($membres as $membre)
                <tr>
                  <td>{{$membre->ccpccommune->name}}</td>
                  <td>
                  {{$membre->ccpccommune->email}}
                  </td>
                  <td>{{$membre->ccpccommune->adresse}}</td>
                  <td> {{$membre->ccpccommune->telephone}}</td>
                   <td>{{$membre->ccpccommune->departement->name}}</td>
                 
                <td><a href="{{url('membres',$membre->id)}}" class="btn btn-primary"> <span class="glyphicon glyphicon-open"></span>  </a></td>
                
                </tr>

              @endforeach
             
             

            </tbody>
        </table>

  
<div class="pagination">
       {!! $membres->links(); !!}

 </div>

    </div>
</div>
</div>
</div>
</section>

</div>         

@stop
