@extends('layouts.default')

@section('contenu')
    
  
            <section class="relative iosslider w_full">
                <!--slider-->
                <div class="slider">
                    
                    
                    @foreach($sliders as $slider) 
                    <div class="slide">
                        <img src="{{$slider->image}}"  alt="">
                  <!-- <img src="ton_image.format" width=nombre_voulu height=idem alt="..." title="..." />  -->

                        <div class="item_3 animate_ftr tr_all_medium d_xs_none">
                            <p class="slider_title_1 fw_ex_bold color_light tt_uppercase lh_ex_small">
                                <!--{{$slider->description}}-->
                                    
                                </p>
                            <br><br><br><br><br><br><br><br>
                            
                            <h1 class="fw_ex_light color_light slider_title_3 tt_uppercase m_bottom_10 m_sm_bottom_0">{{$slider->description}}</h1>
                            
                            <p class="color_light m_bottom_25 m_sm_bottom_5"></p>
                            

                        </div>
                    </div>
                                               @endforeach     
                 

                </div>
                <!--nav-->
                <button class="ios_nav_prev">


                </button>
                <button class="ios_nav_next"></button>
            </section>
            <!--content-->
            

<br>
    
     <aside style="float: right;  width: 30%;">
         
         <iframe width="460" height="347" src="http://www.youtube.com/embed/0319ZgKMLzw?autoplay=1"> </iframe> 

     </aside>

     


<section style="float: left; width: 63%; background-color:">
<center><h2 style="color: dark-green; width: 800px; ">
        
    Société d’Information en Communication sociale et économique					
</h2></center>

        
           
        <p style="padding-left: 20px;">    
    Ce site a une origine et un but fort simple ; il s’efforce de répondre aux questions des croyants chrétiens et non chrétiens qui sont en quête de la vérité au sujet de la Bible, la parole vivante de Dieu. A travers ce site, notre engagement  est d’offrir une explication sérieuse sur le processus de la découverte

     du vrai Dieu. Nous encourageons nos internautes à prendre très au sérieux les enseignements des saintes Ecritures. Ils doivent être lus avec respect et il faut les appréhender comme tels, et avec le souci de ne pas mettre en avant une pensée humaine. 

     </p>
  

<p style="padding-left: 20px;">
      Trois choses sont à remarquer en naviguant sur notre site web : la première sera des explications  qui concernent la découverte du vrai Dieu dont nous n’avions jamais entendu parler, et qu’il fallait pourtant suivre avec attention et intérêt. La seconde sera la présentation du message authentique de l’Evangile, comme l’enseignement-loi, la vérité de vie  que chaque prédicateur présente d’une manière particulière ; cette vérité de vie se découvrira de plus en plus à ceux qui auront le courage de persévérer, de vivre les enseignements, de savourer les promesses et toutes les pensées bibliques. La troisième, que ce site soit ouvert aux critiques et prêt à entendre tous ceux qui ont le désir de faire découvrir le vrai Dieu unique.      
</p>

</section>



<!-- form prduct -->


<!-- form priduct end-->

<hr>

 <br>
 <br>
 <br>
 <br>
 <br>
<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

   





        <!--our featured projects-->
            <section class="section_offset relative">
                <div class="container">
                      
                        
                        <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft"> Les Derniers Articles Publies </h3>

                    <p class="m_bottom_35 t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">


                                                  

                     <!-- okokok Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. --></p>
                    <div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
                        <!--projects carousel-->
                        <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>


                        @foreach($pasteurs as $pasteur)
                            <!--project-->
                            <figure class="t_xs_align_c col-lg-12">
                                <!--image container-->
                                <div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
                                    <img src="{{$pasteur->image}}" alt="">
                                    
                                    <div class="popup_buttons tr_all_long">
                                        <a href="#" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
                                            <i class="icon-plus"></i>
                                        </a>
                                        <a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>


                                </div>
                                <figcaption class="t_xs_align_l">
                                    <!--project's title-->
                                    <h4 class="fw_light fs_middle"><a href="#" class="color_dark">{{$pasteur->firstname}} {{$pasteur->lastname}}</a></h4>


      


                                    <!--project's info-->

                                    
                                     <!--
                                    <ul class="dotted_list m_bottom_5 color_grey_light_2">
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_grey_light_2 fs_small">
                                                <i class="icon-picture"></i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="fs_medium color_grey">
                                                <i>Mobile</i></a>,
                                            <a href="#" class="fs_medium color_grey">
                                                <i>Technology</i>
                                            </a>
                                        </li>
                                        <li class="m_right_15 relative d_inline_m">
                                            <a href="#" class="color_red_hover">
                                                <i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
                                            </a>
                                        </li>
                                    </ul>

                                    -->
                                    <p class="m_bottom_10 fw_light">{{$pasteur->address}}.</p>
                                   <p>
                                       

                                   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="nazareenhaiti@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Nazareen">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/fr_XC/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="1" height="1">
</form>

                                   </p>

                                    <div class="clearfix">
                                        <a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
                                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Lire la Suite
                                        </a>
                                        
                                        <!-- <a href="#" class="color_purple color_pink_hover f_left d_block">
                                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                <i class="icon-link"></i>
                                            </span>
                                            View Project
                                        </a>
                                         -->
                                    </div>
                                </figcaption>
                            </figure>

                          @endforeach



                          
                        </div>
                    </div>
                </div>
                <!--carousel nav-->
                <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
                    <i class="icon-left-open-big"></i>
                </button>
                <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
                    <i class="icon-right-open-big"></i>
                </button>
            </section>
            


            <hr>
                    


<!-- try comment-->

     
<!-- fin trycomment-->

<div class="container">
  <div class="row">
    
    <!-- <div class="col-sm">
      One of three columns
    </div>
     -->
    <div class="col-sm">
      
                            @foreach($comments as $comment)


                            <div class="m_bottom_45 m_xs_bottom_30">
                                <div class="d_table w_full m_bottom_20">
                                    <div class="d_table_cell">
                                        <!--author photo-->
                                        <a href="#" class="d_inline_m circle wrapper m_right_10">
                                            <img src="images/blog_img_13.jpg" alt="">
                                        </a>
                                        <!--author name-->
                                        <div class="d_inline_m">
                                            <a href="#" class="fs_large color_dark tr_all"><b>Marta Healy</b></a>
                                            <p class="fs_medium color_grey d_mxs_none"><i>September 23, 2013, 11:45 am</i></p>
                                        </div>
                                    </div>
                                    <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                        <a href="#" class="color_purple d_inline_b color_pink_hover d_block f_right fw_light">
                                            <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                                <i class="icon-reply"></i>
                                            </span>
                                            Reply
                                        </a>
                                    </div>
                                </div>
                                <div class="comment relative r_corners bg_light_3 fw_light">
                                
                                {{$comment->texte}}
                                 </div>
                            </div>
                            
                          @endforeach
                         


                            <!--comment form-->
                            <h5 class="fw_light color_dark m_bottom_23">Leave a Comment</h5>
                            <form>
                                <ul>
                                    <li class="row fw_light">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <input type="text" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Name*">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <input type="email" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Email*">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <input type="url" class="r_corners color_grey r_corners w_full m_bottom_10" placeholder="Website">
                                        </div>
                                    </li>
                                    <li class="m_bottom_20 fw_light">
                                        <textarea class="color_grey d_block r_corners w_full height_4" placeholder="Message"></textarea>
                                    </li>
                                    <li>
                                        <button class="button_type_2 r_corners tr_all fs_medium color_blue transparent">Submit</button>
                                    </li>
                                </ul>
                            </form>

    


    </div>
    
    <!-- <div class="col-sm">
      One of three columns
    </div>
     -->
  </div>
</div>
<hr style="color: red;">
@stop
