<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Administration Sikse</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">


	
 {{ Html::style('admin/css/lib/lobipanel/lobipanel.min.css')}}
{{ Html::style('admin/css/separate/vendor/lobipanel.min.css')}}
{{ Html::style('admin/css/lib/jqueryui/jquery-ui.min.css')}}
{{ Html::style('admin/css/separate/pages/widgets.min.css')}}

{{ Html::style('admin/css/lib/font-awesome/font-awesome.min.css')}}
{{ Html::style('admin/css/lib/bootstrap/bootstrap.min.css')}}
{{ Html::style('admin/css/main.css')}}


</head>

<body class="with-side-menu dark-theme dark-theme-blue">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="{{url('/')}}" class="site-logo-text">Accueil</a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
	                       

	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan essai</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-2.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-3.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="{{Request::root().'/'}}default.png" alt="">
	                                    </div>
	                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>



	                    
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="{{Request::root().'/'}}logo.jpg" alt="">
	                        </button>
	                        

	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                           
                                  
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>My Account</a>

	                              
	                            
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out">
                                              	<form action="#" method="POST" id="logout-form">
                  <!-- {{csrf_field()}} -->
                  <a href="{{url('logout')}}"> Logout</a>
                  </form>

	                            </span>
	                            </a>
	                        </div>

	                        


	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        
	                        <div class="dropdown dropdown-typical">
	                            <br>

                                 <h4><a href="{{url('admin/index')}}"> Administration</a></h4>




	                        </div>
	                       
 
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text"  placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"> </span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <div class="side-menu-avatar">
	        <div class="avatar-preview avatar-preview-100">
	            <img src="{{Request::root().'/'}}logo.jpg" alt="">
	        </div>
	    </div>
	    
	    <ul class="side-menu-list">
	        <li class="brown">
	            <a href="#">
	                <!-- <i class="font-icon font-icon-users"></i> -->
	                <span class="lbl"><!-- A la découverte du vrai Dieu --></span>
	            </a>

	            <li>
	            	<a href="{{url('admin/departments')}}"><!-- Departements --></a>
	            </li>
	        </li>
            
            <li class="blue">
	            <a href="{{url('admin/secteuractivites') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Gestion d'activite  </span>
	            </a>
	        </li>



            <li class="blue">
	            <a href="{{url('admin/ccpcs') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl"> Ccpc  </span>
	            </a>
	        </li>



           
            <li class="blue">
	            <a href="{{url('admin/membres') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl"> Membres  </span>
	            </a>
	        </li>

            <li class="blue">
	            <a href="{{url('admin/fonctions') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl"> Fonction  </span>
	            </a>
	        </li>


	      <!--   <li class="green">
	            <a href="#">
	                <i class="font-icon font-icon-cart"></i>
	                <span class="lbl">Programme 7 000 pour 1</span>
	            </a>


	            <li>
	            	<a href="{{ url('admin/septpouruns') }}">Categorie 7000 pour 1</a>
	            </li>
	        </li>
 -->


<!-- 
	        <li class="blue">
	            <a href="{{ url('admin/eglises') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Nos églises</span>
	            </a>
	        </li>
 -->

<!--         <li class="blue">
	            <a href="{{ url('admin/pasteurs') }} " >
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl"> Nos pasteurs</span>
	            </a>
	        </li>
 -->
	        

	        <!-- <li class="blue">
	            <a href="#">
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Programme ACTION 3,20x4</span>
	            </a>
	        </li>
                    


                    <li class="blue">
	            <a href="{{ url('admin/projetsepts') }}">
	                <i class="font-icon font-icon-users"></i>
	                <span class="lbl">Projet 7000 pour 1</span>
	            </a>
	        </li>

 -->


	    <li class="pink-red">
	            <a href="{{url('admin/sliders')}}">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Sliders</span>
	            </a>
	        </li>    



        

                    

	        
	       


	        
	        
	       
	        <li class="grey">
	            <a href="#">
	                <i class="font-icon font-icon-doc"></i>
	                <span class="lbl">Documentation</span>
	            </a>
	        </li>
	        
	        
	
	        <li class="aquamarine">
	            <a href="#">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Contact form</span>
	            </a>
	        </li>
	        
       
	    </ul>
	</nav><!--.side-menu-->




<div class="page-content">
      <div class="container-fluid">
  



             @yield('page')

     </div>

</div>




    {{ Html::script('admin/js/lib/jquery/jquery.min.js')}}
    {{ Html::script('admin/js/lib/tether/tether.min.js')}}
    {{ Html::script('admin/js/lib/bootstrap/bootstrap.min.js')}}
    {{ Html::script('admin/js/plugins.js')}}

	{{ Html::script('admin/js/lib/jqueryui/jquery-ui.min.js')}}
	{{ Html::script('admin/js/lib/lobipanel/lobipanel.min.js')}}
	{{ Html::script('admin/js/lib/match-height/jquery.matchHeight.min.js')}}
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
	<script>
		$(document).ready(function() {
			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						},
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>


{{ Html::script('admin/js/app.js')}}
{{ Html::script('admin/bootstrap/js/boot1.js')}}
{{ Html::script('admin/bootstrap/js/boot2.js')}}
{{ Html::script('admin/bootstrap/js/boot3.js')}}

</body>
</html>