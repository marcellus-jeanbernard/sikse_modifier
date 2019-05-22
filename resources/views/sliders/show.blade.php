@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Slider
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">
                <h2>{{$slider->description}}:</h2>

                
                <div>
                  <img src="{{$slider->image}}"  height="300" width="500" class="img-rounded" alt="Visa">
                 
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

                  <a href="{{ url('admin/sliders')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop