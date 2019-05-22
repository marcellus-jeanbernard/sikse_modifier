@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          7000 pour 1
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
                    <td>{{$septpourun->id}}</td>
                  </tr>
                  <tr>
                    <td>7000 pour 1:</td>
                    <td>{{$septpourun->nom}}</td>
                  </tr>
                  <tr>
                    <td>description:</td>
                    <td>{{$septpourun->description}}</td>
                  </tr>
                  
                  

        
                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
              <strong>Terms and Conditions</strong>
              Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/septpouruns')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop