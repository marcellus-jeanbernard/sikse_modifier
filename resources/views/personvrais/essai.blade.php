@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
         <!-- Vous avez des enfants a charge? si oui cliquer sur oui si non fait sauvegarder -->
        </header>
        


        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">
                <h2>Vous avez des enfants a charge? si oui cliquer sur "Continuer" si non fait Terminer</h2>

                
                <div>
                  <!-- <img src=""  height="300" width="500" class="img-rounded" alt="Visa"> -->
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6 clearfix invoice-info">
             



              
            </div>
          </div>




          


          
          <div class="row">
            
            
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="#" class="btn btn-primary">Continuer</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->

                   <a href="{{ url('creation')}}" class="btn btn-primary">Terminer</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop