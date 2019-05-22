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
                <h2>Merci vous avez termine avec succes</h2>

                
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

                  <a href="{{ url('admin/sliders')}}" class="btn btn-primary">Continuer</a>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop