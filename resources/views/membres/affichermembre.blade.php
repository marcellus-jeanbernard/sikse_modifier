@extends('layouts.default')
@section('contenu')


      <section class="card">
        <header class="card-header card-header-lg">
          Ccpc
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
                    <td>{{$membre->id}}</td>
                  </tr>
                  <tr>
                    <td>ccpc:</td>
                    <td>{{$membre->name}}</td>
                  </tr>
                  <tr>
                    <td>Adresse:</td>
                    <td>{{$membre->adresse}}</td>
                  </tr>

                                   <tr>
                    <td>Email:</td>
                    <td>{{$membre->email}}</td>
                  </tr>

                                   <tr>
                    <td>Telephone:</td>
                    <td>{{$membre->telephone}}</td>
                  </tr>
                  
                  

        
                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
              <strong>blabla bla</strong>
              
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="#" class="btn btn-primary">Back</a>
                  <!--<button class="{{ url('admin/ccpccommunes')}}">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop