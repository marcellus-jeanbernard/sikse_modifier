@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Membre
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">

                <h2>Code Membre: {{$membre->code}}:</h2>

                
              </div>


                 
 <table>
                  <tr>
                    <td>Name:</td>
                    <td>{{$membre->nom}}</td>
                  </tr>



                  <tr>
                    <td>Name:</td>
                    <td>{{$membre->prenom}}</td>
                  </tr>


                  <tr>
                    <td>Name:</td>
                    <td>{{$membre->sexe}}</td>
                  </tr>

                  <tr>
                    <td>Email:</td>
                    <td>{{$membre->email}}</td>
                  </tr>
                  
                  <tr>
                    <td>Address:</td>
                    <td>{{$membre->address}}</td>
                  </tr>
 
              
                <tr>
                    <td>Ccpc:</td>
                    <td>{{$membre->ccpc->name}}</td>
                  </tr>
 

                <tr>
                    <td>Fonction:</td>
                    <td>{{$membre->fonction->name}}</td>
                  </tr>

                  <tr>
                    
                    <td> secteur activite</td>
                    <td>{{$membre->secteuractivite->name }}</td>
                  </tr>



                  <tr>
                    <td>Telephone:</td>
                    <td>{{$membre->phone}}</td>
                  </tr>






                </table>



            </div>
            <div class="col-lg-6 clearfix invoice-info">
             

              <div class="payment-details">
               <!--  <strong>Informations'Details</strong> -->
               


                <table>




                  <tr>
                    <td>GAP:</td>
                    <td>{{$membre->gap}}</td>
                  </tr>
                  

                  <tr>
                    <td>Notion de Base:</td>
                    <td>{{$membre->notion_de_base}}</td>
                  </tr>

                  <tr>
                    <td>Pretest Notion de Base:</td>
                    <td>{{$membre->pretest_nb}}</td>
                  </tr>
                  <tr>
                    <td>Moyenne Pretest:</td>
                    <td>{{$membre->moyenne_pre}}</td>
                  </tr>
 
                 <tr>
                    <td> Posttest Notion de Base:</td>
                    <td>{{$membre->post_test_nb}}</td>
                  </tr>
                     
                     <tr>
                    <td>Moyenne Post-test:</td>
                    <td>{{$membre->moyenne_pos}}</td>
                  </tr>

                                       <tr>
                    <td>Performance:</td>
                    <td>{{$membre->performance}}</td>
                  </tr>

                                       <tr>
                    <td> Pre-test accumulative:</td>
                    <td>{{$membre->pretest_acc}}</td>
                  </tr>

                  <tr>
                    <td>Moyenne pretest accumulative:</td>
                    <td>{{ $membre->moyenne_pretest_acc }}</td>
                  </tr>
 
                     <tr>
                    <td> Post test accumulative:</td>
                    <td>{{ $membre->post_test_acc }}</td>
                  </tr>
 

                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
<!--               <strong>Terms and Conditions</strong>
              Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices. -->
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/membres')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-fast-backward"></span></a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
<!--                   <button class="btn btn-inline btn-secondary btn-rounded">Print</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop