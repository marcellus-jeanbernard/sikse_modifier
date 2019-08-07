<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sikse | SIKSE</title>

{{Html::style('css/bootstrap.css') }}



{{Html::style('css/revolution-slider.css') }}


{{Html::style('css/style.css') }}

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

{{Html::style('css/responsive.css') }}

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header fixed">
    	<!--Header Top-->
        <div class="header-top">
        	<div class="container">
            	<div class="row clearfix">
                	<!--Top Left-->
                	<div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    	<div class="clearfix">






                        	<div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Call us : <a href="#">+49 123 456 789</a>

                    
                             
                            </div>
                            <div class="pull-left email"><span class="icon flaticon-mail115"></span>Send email : <a href="support@email.de">support@email.de</a> 
                             

                            </div>
                        </div>
                    </div>




                


                    <!--Top Right-->
                    <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                        <div class="social-links">
                            <a href="https://youtu.be/WtTuFyoxEbE" class="fa fa-facebook-f"></a> 
                            <a href="#" class="fa fa-twitter"></a> 
                            

                          
                               <a href="#" class="fa fa-instagram"></a>


                        </div>


                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header Lower-->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo">  




                    <a href="/"> 

                        <img src="{{URL('images/logo.JPG')}}" alt="Sikse" title="Sikse">
                        <!-- {{HTML::image('logo.jpg')}} -->

                     </a>
                  </div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li class="current dropdown"><a href="/">A propos </a>
                                    <ul class="submenu">
                                        <li><a href="{{url('historiques')}}">Historique</a></li>
                                        <li><a href="{{url('objectif')}}">Objectifs</a></li>
                                        <li><a href="{{url('equipe')}}">Equipe</a></li>

                                        
                                    </ul>
                                </li>
                                



                                <li class="dropdown">
                                    <a href="{{url('formation')}}">Services</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('formation')}}">Formations</a></li>
                                        <li><a href="{{url('sondage')}}">Sondage</a></li>
                                        <li><a href="{{url('etudes')}}">Etudes</a></li>
                                        <li><a href="{{url('executionprojet')}}">Exécution de projet</a></li>
                                        <li><a href="{{url('appui')}}">Appui technique</a></li>
                                        


                                    </ul>
                                </li>

                                  

                           <li class="dropdown"><a href="{{url('sondage')}}">Actualite</a>
                                    <ul class="submenu">
                                        


                                        <li class="dropdown">
                                            <a href="{{url('sondage')}}">Economie</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('sondage')}}">Haiti</a></li>
                                                <li><a href="{{url('sondage')}}">Internationale</a></li>
                                            </ul>
                                        </li>
                                       

                                        <li><a href="{{url('sondage')}}">Societe</a></li>                 
                                        <li><a href="{{url('ajax-ccpccom')}}">Risques et désastres</a></li>
                                        <li><a href="{{url('sondage')}}">Agriculture</a></li>
                                        <li><a href="{{url('sondage')}}">Commerce</a></li>
                                        <li><a href="{{url('sondage')}}">Industrie</a></li>


                                    </ul>
                                </li>




<!-- 
                           <li class="dropdown"><a href="#">Risque et Desastre</a>
                                    <ul class="submenu">
                                        


                                        <li class="dropdown">
                                            <a href="{{url('ajax-ccpccom')}}">CCPC </a>
                                            <ul class="submenu">
                                                           
                                                <li><a href="{{url('ajax-ccpccom')}}">visualiser les CCPC</a></li>
                           
                                            
                                            </ul>
                                        </li>


                                        <li class="dropdown">
                                            <a href="testimonial-v1.html">Membre</a>
                                            <ul class="submenu">
                                                <li><a href="testimonial-v1.html">Membre 1</a></li>
                                                <li><a href="testimonial-v2.html">Internationale</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li> -->





                                <li class="dropdown">
                                    <a href="{{url('sondage')}}">Evenements</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('sondage')}}">Etudes et documentations</a></li>
                                        <li><a href="{{url('sondage')}}">L’interview</a></li>
                                        <li><a href="{{url('sondage')}}">Des chiffres et nous</a></li>
                                        <li><a href="{{url('sondage')}}">Opporunités et annonces</a></li>
   



                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown"><a href="{{url('data')}}">Ccpc</a>
                                    <ul class="submenu from-left">
                                        <li><a href="{{url('data')}}">Afficher Tout</a></li>
                                        <li><a href="#"> Ccpc OUest</a></li>
                                        <li><a href="#"> Ccpc Sud</a></li>
                                        <li><a href="#">CCPC NIPPE</a></li>

                                    </ul>
                                </li>





<!--                           <li class="dropdown"><a href="contact.html">Compte</a>
                                    <ul class="submenu from-left">
                                        <li>
                                                                            
                                

                      
                            @if(Auth::check())
      <a href="{{ url('profil/'.Auth::user()->id ) }}"> Mon Compte</a>

                       @if(Auth::user()->role =='admin')
                              <a href="{{url('admin/index')}}"> Administration</a> 

                               @endif

                           
                            <a href="{{ route('logout') }}"> Logout</a>
                            @else        
                            <a href="login"> Se Connecter</a>
                            @endif
                            



                                        </li>
                                        
                                    </ul>
                                </li> -->





                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->




                </div>
                
            </div>
            
        </div>
        <!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
     

            {{HTML::image('images/logo.JPG')}}
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                    <li class="current dropdown"><a href="/">A propos </a>
                        <ul class="submenu">
                            <li><a href="index.html">Historique</a></li>
                            <li><a href="index-2.html">Objectif</a></li>
                            <li><a href="index-3.html">Equipe</a></li>
                            
                        </ul>
                    </li>



                                                    <li class="dropdown">
                                    <a href="causes.html">Services</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('formation')}}">Formations</a></li>
                                        <li><a href="{{url('sondage')}}">Sondage</a></li>
                                        <li><a href="{{url('etudes')}}">Etudes</a></li>
                                        <li><a href="{{url('executionprojet')}}">Exécution de projet</a></li>
                                        <li><a href="{{url('appui')}}">Appui technique</a></li>
                                        


                                    </ul>
                                </li>







                           <li class="dropdown"><a href="#">Actualite</a>
                                    <ul class="submenu">
                                        


                                        <li class="dropdown">
                                            <a href="testimonial-v1.html">Economie</a>
                                            <ul class="submenu">
                                                <li><a href="testimonial-v1.html">Haiti</a></li>
                                                <li><a href="testimonial-v2.html">Internationale</a></li>
                                            </ul>
                                        </li>
                                       

                                        <li><a href="donation.html">Societe</a></li>                 
                                        <li><a href="become-a-volunteer.html">Risques et désastres</a></li>
                                        <li><a href="become-a-volunteer.html">Agriculture</a></li>
                                        <li><a href="become-a-volunteer.html">Commerce</a></li>
                                        <li><a href="become-a-volunteer.html">Industrie</a></li>


                                    </ul>
                                </li>


                     

                                <li class="dropdown">
                                    <a href="event.html">Evenements</a>
                                    <ul class="submenu">
                                        <li><a href="single-event.html">Etudes et documentations</a></li>
                                        <li><a href="single-event.html">L’interview</a></li>
                                        <li><a href="single-event.html">Des chiffres et nous</a></li>
                                        <li><a href="single-event.html">Opporunités et annonces</a></li>
   



                                    </ul>
                                </li>



                                <li class="dropdown"><a href="contact.html">Contact</a>
                                    <ul class="submenu from-left">
                                        <li><a href="contact.html">Contact Style One</a></li>
                                        <li><a href="#">Contact Style Two ok </a></li>
                                    </ul>
                                </li>




                          <li class="dropdown"><a href="contact.html">Compte</a>
                                    <ul class="submenu from-left">
                                        <li>
                                                                            
                                               <!--authentification-->

                      
                            @if(Auth::check())
      <a href="{{ 'profil/'.Auth::user()->id }}"> Mon Compte</a>

                       @if(Auth::user()->role =='admin')
                              <a href="{{url('admin/index')}}"> Administration</a> 

                               @endif

                           
                            <a href="{{ route('logout') }}"> Logout</a>
                            @else        
                            <a href="login"> Se Connecter</a>
                            @endif
                             <!-- authentification  -->



                                        </li>
                                        
                                    </ul>
                                </li>






                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Nav End-->











<br>

<br>

<br>

<br>

<br>

          @yield('contenu')


















    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">


                        	
                            <!--Footer Column-->


                            <!-- TRY ACCOUNT-->
                                 
                                 <!-- <li class="dropdown"><a href="contact.html">Compte</a> -->
                                    <ul class="submenu from-left">
                                        <li>
                                                                            
                                               <!--authentification-->

                      
                            @if(Auth::check())
      <a href="{{ url('profil/'.Auth::user()->id ) }}"> Mon Compte</a>
      

                       @if(Auth::user()->role =='admin')
                              <a href="{{url('admin/index')}}"> Administration</a> 

                               @endif

                           
                            <a href="{{ route('logout') }}"> Logout</a>
                            @else        
                            <a href="login"> Se Connecter</a>
                            @endif
                             <!-- authentification  -->



                                        </li>
                                        
                                    </ul>
                             <!--    </li> -->
                            <!-- END TRY ACCOUNT-->
                        	

                            
                        </div>
                    </div>
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	



                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">Copyright 2019 by <strong>Sikse - MARCELLUS Jean Bernard</strong> | All rights reserved</div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<!-- 
<script src="js/jquery.js"></script> --> 



{{Html::script('js/jquery.js') }}
<!-- 
<script src="js/bootstrap.min.js"></script> -->
{{Html::script('js/bootstrap.min.js') }}


{{Html::script('js/rev-plugins.js') }}
{{Html::script('js/revolution.min.js') }}
{{Html::script('js/owl.carousel.min.js') }}

{{Html::script('js/jquery.easing.min.js') }}

{{Html::script('js/fitvids.js') }}

{{Html::script('js/jquery-parallax.js') }}

{{Html::script('js/scrollbar.js') }}

{{Html::script('js/validate.js') }}



{{Html::script('js/wow.js') }}
{{Html::script('js/script.js') }}






</body>
</html>