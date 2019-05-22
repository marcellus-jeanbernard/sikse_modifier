@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Fonction
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              

            </div>
            <div class="col-lg-6 clearfix invoice-info">
              
              <div class="payment-details">
                <strong>Informations'Details</strong>
               


                <table>
                  <tr>
                    <td>Id:</td>
                    <td>{{$fonction->id}}</td>
                  </tr>
                  <tr>
                    <td>Fonction:</td>
                    <td>{{$fonction->name}}</td>
                  </tr>
                  <tr>
                    <td>description:</td>
                    <td>{{$fonction->description}}</td>
                  </tr>
                  
                  

        
                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
              <strong>blbablalsld</strong>
              
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/fonctions')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop