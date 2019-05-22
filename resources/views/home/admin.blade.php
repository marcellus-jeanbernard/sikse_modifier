@extends('layouts.admin')
@section('page')


     <center> <h2><span class="label label-primary">administration de la  Société d’Information en Communication sociale et économique:SIKSE</span></h2></center>

  <div class="row">
	            <div class="col-xl-6">
	                


  {!! $chart->html() !!}
<!-- 
     <hr> 
      {!!$pie->html() !!} -->


	                 <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number"> {{$users}}</div>
	                                <div class="caption"><div>Utilisateur(s)</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->

                    
	                 <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number"> {{$sliders}}</div>
	                                <div class="caption"><div>Slider(s)</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    

	                     <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">{{ $fonctions }}</div>
	                                <div class="caption"><div>fonction</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
                         



	            </div><!--.col-->
 
           


	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            
	                            <div>
	                                <div class="number">{{$ccpcs}}  </div>
	                                <div class="caption"><div>CCPC test (S)</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>

	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">{{ $secteuractivites }}</div>
	                                <div class="caption"><div>Secteur d'activite</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number"></div>
	                                <div class="caption"><div>Article (s) publie (s)</div></div>
	                                <div class="percent">
	                                    <div class="arrow down"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->


                       
	                    
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number"></div>
	                                <div class="caption"><div>Commentaire (s) </div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->

                       
                        
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number"></div>
	                                <div class="caption"><div> verification 4</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    

	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number"></div>
	                                <div class="caption"><div>verification 5</div></div>
	                                <div class="percent">
	                                    <div class="arrow up"></div>
	                                    <p></p>
	                                </div>
	                            </div>
	                        </article>
	                    </div><!--.col-->


     <hr> 
      {!!$pie->html() !!}
	                    

	                    


	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->

{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $pie->script() !!}
@stop