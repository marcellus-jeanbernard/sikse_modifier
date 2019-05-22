@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Projet @ la decouverte du vrai Dieu 
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">
                <h2>{{$projetdecouverte->titre}}:</h2>

                
                <div>
                  <img src="{{$projetdecouverte->image}}"  height="180" width="180" class="img-rounded" alt="Visa">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6 clearfix invoice-info">
             

              <div class="payment-details">
                <strong>Informations'Details</strong>
               


                <table>
                <tr>
                  <tr>
                    <td>Name:</td>
                    <td>{{$projetdecouverte->titre}}</td>
                  </tr>

                  <tr>
                    <td>Description:</td>
                    <td>{{$projetdecouverte->description}}</td>
                  </tr>
                  

                    <tr>
                    <td>@ la decouverte:</td>
                    <td>{{$projetdecouverte->decouverte->nom}}</td>
                  </tr>

          
                  </tr>

                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
<!--             <div class="col-lg-7 terms-and-conditions">
              <strong>Terms and Conditions</strong>
              Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.
            </div> -->
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/projetdecouvertens')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop