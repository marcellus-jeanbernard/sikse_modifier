<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <title>SOCITE D’INFORMATION EN COMMUNICATION SOCIALE ET ECONOMIQUE                  
 - SIKSE </title>
        <!--meta info-->
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
        <!--web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        
        {{Html::script('default-css/code.jquery.com/jquery-2.1.0.min.js')}}
         
       <!-- <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.carousel.css"> -->
         {{Html::style('default-css/plugins/owl-carousel/owl.carousel.css') }}
       <!-- <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/owl.transitions.css"> -->
        {{Html::style('default-css/plugins/owl-carousel/owl.transitions.css') }}
        <!--<link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css"> -->
        {{Html::style('default-css/plugins/jackbox/css/jackbox.min.css') }}
        <!--theme css-->
        <!--<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">-->
        {{Html::style('default-css/css/bootstrap.min.css') }}
       <!-- <link rel="stylesheet" type="text/css" media="all" href="css/theme-animate.css"> -->
        {{Html::style('default-css/css/theme-animate.css') }}
        <!--<link rel="stylesheet" type="text/css" media="all" href="css/style.css"> -->
        {{Html::style('default-css/css/style.css') }}
        <!--head libs-->
        
        <!--<script src="js/jquery-2.1.0.min.js"></script> -->
        {{Html::script('default-css/js/jquery-2.1.0.min.js')}}
        <!--<script src="plugins/jquery.queryloader2.min.js"></script> -->
        {{Html::script('default-css/plugins/jquery.queryloader2.min.js')}}
        <!--<script src="plugins/modernizr.js"></script>-->
        {{Html::script('default-css/plugins/modernizr.js')}}
        
        <script>
            $('html').addClass('d_none');
            $(document).ready(function(){
                $('html').show();
                $("body").queryLoader2({
                    backgroundColor: '#fff',
                    barColor : '#35eef6',
                    barHeight: 4,
                    percentage:true,
                    deepSearch:true,
                    minimumTime:1000
                });
            });
        </script>
    </head>
    <body class="sticky_menu">
         
        <!--side menu-->
        <button id="open_side_menu" class="icon_wrap_size_2 circle color_black">
            <i class="icon-menu"></i>
        </button>
        <div id="side_menu">
            <header class="m_bottom_30 d_table w_full">
                <!--logo-->
                <div class="d_table_cell half_column v_align_m">
                    <a href="{{ URL::to('/')}}">
                        <img src="default-css/images/logo.jpg" alt="">
                    </a>
                </div>
                <!--close sidemenu button-->
                <div class="d_table_cell half_column v_align_m t_align_r">
                    <button class="icon_wrap_size_2 circle color_grey_light_2 d_inline_m" id="close_side_menu">
                        <i class="icon-cancel"></i>
                    </button>
                </div>
            </header>
            <hr class="divider_type_4 m_bottom_20">
            <!--searchform-->
            <form role="search" class="m_bottom_20 relative type_2">
                <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
                <button class="color_grey_light color_purple_hover tr_all">
                    <i class="icon-search"></i>
                </button>
            </form>
            <hr class="divider_type_4 m_bottom_25">
            <!--main menu-->
            <nav>
                <ul class="side_main_menu fw_light">
                    <li class="has_sub_menu active m_bottom_10">
                        <a href="index.html" class="d_block relative fs_large color_light_2 color_blue_hover">Home</a>
                        <!--sub menu(second level)-->
                        <ul class="m_top_10">
                            <li class="has_sub_menu m_bottom_10">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                                <!--sub menu(third level)-->
                                <ul class="m_top_10 d_none">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                    <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                    <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                    <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                    <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                    <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu active">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                                <!--sub menu(third level)-->
                                <ul class="m_top_10">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                    <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                    <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                    <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                    <li class="m_bottom_10"><a href="index_video_slider.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                    <li class="has_sub_menu active">
                                        <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                        <!--sub menu(fourth level)-->
                                        <ul class="m_top_10">
                                            <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                            <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                            <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                            <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                            <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                            <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="pages_about.html" class="d_block relative fs_large color_light_2 color_blue_hover">Pages</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="m_bottom_10">
                                <a href="pages_about.html" class="d_block relative color_light_2 color_blue_hover">About us</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_services.html" class="d_block relative color_light_2 color_blue_hover">Services</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_team.html" class="d_block relative color_light_2 color_blue_hover">Team</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_process.html" class="d_block relative color_light_2 color_blue_hover">Process</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_careers.html" class="d_block relative color_light_2 color_blue_hover">Careers</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_faq.html" class="d_block relative color_light_2 color_blue_hover">FAQ</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_404.html" class="d_block relative color_light_2 color_blue_hover">404 Page</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_coming_soon.html" class="d_block relative color_light_2 color_blue_hover">Coming soon page</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_sitemap.html" class="d_block relative color_light_2 color_blue_hover">Sitemap</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full width text page</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with right sidebar</a>
                            </li>
                            <li class="m_bottom_10">
                                <a href="pages_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with left sidebar</a>
                            </li>
                            <li>
                                <a href="pages_contact.html" class="d_block relative color_light_2 color_blue_hover">Contact us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="portfolio_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Portfolio</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="has_sub_menu m_bottom_10">
                                <a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_classic_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_classic_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_classic_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                    <li><a href="portfolio_classic_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid with text</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                    <li><a href="portfolio_sortable_t_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid without text</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                    <li><a href="portfolio_sortable_wt_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable masonry</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_masonry_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_masonry_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover m_bottom_10">3 columns with left sidebar</a></li>
                                    <li><a href="portfolio_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu">
                                <a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Single project pages</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side image list</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_single_full_width_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image list</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_single_side_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with side image slider</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_single_full_width_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image slider</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_single_extended_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with extended image list</a></li>
                                    <li class="m_bottom_10"><a href="portfolio_single_side_video_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side video list</a></li>
                                    <li><a href="portfolio_single_full_width_video.html" class="d_block relative color_light_2 color_blue_hover">Project with full width video list</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="blog_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Blog</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="has_sub_menu m_bottom_10">
                                <a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                    <li><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">1 Column with right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Grid</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="blog_grid_2_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with left sidebar</a></li>
                                    <li class="m_bottom_10"><a href="blog_grid_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="blog_grid_3_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with right sidebar</a></li>
                                    <li><a href="blog_grid_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Masonry</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                    <li class="m_bottom_10"><a href="blog_masonry_2_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                    <li class="m_bottom_10"><a href="blog_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                    <li class="m_bottom_10"><a href="blog_masonry_3_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                    <li><a href="blog_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu">
                                <a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Single blog post</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Image post</a></li>
                                    <li class="m_bottom_10"><a href="blog_single_image_slideshow_post.html" class="d_block relative color_light_2 color_blue_hover">Image slideshow post</a></li>
                                    <li class="m_bottom_10"><a href="blog_single_video_post.html" class="d_block relative color_light_2 color_blue_hover">Video post</a></li>
                                    <li class="m_bottom_10"><a href="blog_single_audio_post.html" class="d_block relative color_light_2 color_blue_hover">Audio post</a></li>
                                    <li class="m_bottom_10"><a href="blog_single_blockquote_post.html" class="d_block relative color_light_2 color_blue_hover">Blockquote post</a></li>
                                    <li class="m_bottom_10"><a href="blog_single_link_post.html" class="d_block relative color_light_2 color_blue_hover">Link post</a></li>
                                    <li><a href="blog_single_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full Width Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="#" class="d_block relative fs_large color_light_2 color_blue_hover">Features</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="has_sub_menu m_bottom_10">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                    <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                    <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                    <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                    <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                    <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                    <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                    <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                    <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                    <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                    <li class="has_sub_menu active">
                                        <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                        <!--sub menu(fourth level)-->
                                        <ul class="m_top_10">
                                            <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                            <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                            <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                            <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                            <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                            <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Headers</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Header 1</a></li>
                                    <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Header 2</a></li>
                                    <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Header 3</a></li>
                                    <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Header 4</a></li>
                                    <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Header 5</a></li>
                                    <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Header 6</a></li>
                                </ul>
                            </li>
                            <li class="has_sub_menu m_bottom_10">
                                <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footers</a>
                                <!--sub menu(third level)-->
                                <ul class="d_none m_top_10">
                                    <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footer 1</a></li>
                                    <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Footer 2</a></li>
                                    <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Footer 3</a></li>
                                    <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Footer 4</a></li>
                                    <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Footer 5</a></li>
                                    <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Footer 6</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="shortcodes_elements.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shortcodes</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="m_bottom_10"><a href="shortcodes_elements.html" class="d_block relative color_light_2 color_blue_hover">Elements</a></li>
                            <li class="m_bottom_10"><a href="shortcodes_columns.html" class="d_block relative color_light_2 color_blue_hover">Columns</a></li>
                            <li><a href="shortcodes_typography.html" class="d_block relative color_light_2 color_blue_hover">Typography</a></li>
                        </ul>
                    </li>
                    <li class="has_sub_menu m_bottom_10">
                        <a href="shop.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shop</a>
                        <!--sub menu(second level)-->
                        <ul class="d_none m_top_10">
                            <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Front Page</a></li>
                            <li class="m_bottom_10"><a href="shop_category_v1.html" class="d_block relative color_light_2 color_blue_hover">Category Page v1</a></li>
                            <li class="m_bottom_10"><a href="shop_category_v2.html" class="d_block relative color_light_2 color_blue_hover">Category Page v2</a></li>
                            <li class="m_bottom_10"><a href="shop_product_page_v1.html" class="d_block relative color_light_2 color_blue_hover">Product Page v1</a></li>
                            <li class="m_bottom_10"><a href="shop_product_page_v2.html" class="d_block relative color_light_2 color_blue_hover">Product Page v2</a></li>
                            <li class="m_bottom_10"><a href="shop_cart.html" class="d_block relative color_light_2 color_blue_hover">Shoping Cart &amp; Checkout</a></li>
                            <li class="m_bottom_10"><a href="shop_wishlist.html" class="d_block relative color_light_2 color_blue_hover">Wishlist</a></li>
                            <li class="m_bottom_10"><a href="shop_compare_products.html" class="d_block relative color_light_2 color_blue_hover">Compare products</a></li>
                            <li class="m_bottom_10"><a href="shop_order_list.html" class="d_block relative color_light_2 color_blue_hover">Orders list</a></li>
                            <li><a href="shop_order_information.html" class="d_block relative color_light_2 color_blue_hover">Order information</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--layout-->
        <div class="wide_layout bg_light">
            <!--header markup-->
            <header role="banner" class="relative">
                <span class="gradient_line"></span>
                <!--top part-->
                <section class="header_top_part">
                    <div class="container">
                        <div class="row">
                            <!--contact info-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
                             
                            @if(Auth::check())
      <a href="{{ 'profil/'.Auth::user()->id }}"> Mon Compte</a>

                       @if(Auth::user()->role =='admin')
                              <a href="{{url('admin/index')}}"> Administration</a> 

                               @endif

                           
                            <a href="{{ route('logout') }}"> Logout</a>
                            @else        
                            <a href="login"> Se Connecter</a>
                            @endif
                            

                                <ul class="hr_list fs_small color_grey_light">
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>(509)-4743-3859
                                    </li>
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <a href="mailto:#" class="color_grey_light d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>prgrd.sikse@gmail.com</a>
                                    </li>
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-skype-1"></i></span>skype.name
                                    </li>
                                   


                                </ul>
                            </div>
                            <!--social icons-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
                                <ul class="hr_list d_inline_b social_icons">
                                    <li class="m_right_8"><a href="#" class="color_grey_light facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>

                                    <!-- <li class="m_right_8"><a href="#" class="color_grey_light twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                     -->
                                    <!-- <li class="m_right_8"><a href="#" class="color_grey_light googleplus circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li> -->
                                    

                                    


                                    <li class="m_right_8"><a href="#" class="color_grey_light youtube circle icon_wrap_size_1 d_block"><i class="icon-youtube-play"></i></a></li>
                                    

                                    <li class="m_right_8"><a href="#" class="color_grey_light instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                    <!-- <li class="m_right_8"><a href="#" class="color_grey_light linkedin circle icon_wrap_size_1 d_block"><i class="icon-linkedin-squared"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <!--header bottom part-->
                <section class="header_bottom_part bg_light">
                    <div class="container">
                        <div class="d_table w_full d_xs_block">
                            <!--logo-->
                            <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                <a href="/" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                    <!--<img src="images/logo.png" alt=""> -->
                                    {{HTML::image('logo.jpg')}}

                                    <!--{{Request::root().'/'}}logo.png -->

                                </a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
                                <div class="relative clearfix t_align_r">
                                    <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                        <i class="icon-menu"></i>
                                    </button>
                                    <!--main navigation-->
                                    <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
                                        <ul class="hr_list main_menu fw_light">
                                            




                                            <!-- <li class="current container3d relative f_xs_none m_xs_bottom_5">
                                                <a class="color_dark fs_large relative r_xs_corners" href="/">Akey
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>    

                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    <li class="current container3d relative">
                                                        <a href="index.html" class="d_block color_dark relative">Layouts
                                                            <i class="icon-angle-right"></i>
                                                        </a>

                                                    </li>


                                                </ul>

                                            </li>
 -->
                                            
                                            
                                            <li class="container3d relative f_xs_none m_xs_bottom_5">
                        <a  href="#" >Accueil 
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">

                               
                                <!-- <li><a href="#"> La grandeur du Dieu unique</a></li>
                            <li><a href="#"> Les religions ou le mysticisme du Moyen-Orient</a></li>
                               <li><a href="#"> Les mystères des pyramides</a></li>
                               <li><a href="#">Comprendre l’œuvre des écrivains bibliques.</a></li>
        <li><a href="#">L’explication des vérités fondamentales bibliques et ses limites</a></li>
                               <li><a href="#">Les faits historiques de la foi et leur réalité.</a></li>
                               <li><a href="#">La religion de Yahvé</a></li>
                               <li><a href="#"> L’origine de l’univers et de l’homme</a></li>
                               <li><a href="#">L’appel d’Abraham ou la découverte du vrai Dieu</a></li>
                               <li><a href="#">Etapes de l’histoire d’Israël</a></li>
                               <li><a href="#">Le Jésus historique et Jésus la source de notre foi</a></li>
                               <li><a href="#">Le ministère de Jean le baptiseur</a></li>
                               <li><a href="#">Jean le baptiseur et le Jésus de l’histoire</a></li>
                               <li><a href="#">Conditions et moyens pour découvrir le vrai Dieu</a></li>
                                <li><a href="#">Entrer dans l’adoration, c’est une question de TOUT NOTRE ETRE</a></li>
                                <li><a href="#">La mission,l’ordre divin</a></li>
                                --> 
                                                        
                              

                                                </ul>
                                            </li>



<!-- 
 
   <li class="container3d relative f_xs_none m_xs_bottom_5">
                     <a class="color_dark fs_large relative r_xs_corners" href="pages_about.html">A la découverte du vrai Dieu
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                 

                            <li><a href="shop_order_information.html">Explication et application des saintes Ecritures.</a></li>
                                               <li><a href="shop_order_information.html">Certificat de promesse de foi</a></li>
                                               <li><a href="shop_order_information.html">Décision de foi</a></li>
                                               <li><a href="shop_order_information.html">Une vie pour Dieu au quotidien</a></li>
                                              



                                                </ul>
                                            </li>
 -->                                            



     <!-- <li class="container3d relative f_xs_none m_xs_bottom_5">
                     <a class="color_dark fs_large relative r_xs_corners" href="pages_about.html">Port Folio
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    

                            <li><a href="shop_order_information.html">Explication et application des saintes Ecritures.</a></li>
                                               <li><a href="#">Certificat de promesse de foi</a></li>
                                               <li><a href="#">Décision de foi</a></li>
                                               <li><a href="#">Une vie pour Dieu au quotidien</a></li>
                                              
                                                </ul>
                                            </li>
      -->                                       



 <li class="container3d relative f_xs_none m_xs_bottom_5">
                     <a class="color_dark fs_large relative r_xs_corners" href="#">Blog
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                              <!-- 
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    

                            <li><a href="shop_order_information.html">Explication et application des saintes Ecritures.</a></li>
                                               <li><a href="shop_order_information.html">Certificat de promesse de foi</a></li>
                                               <li><a href="shop_order_information.html">Décision de foi</a></li>
                                               <li><a href="shop_order_information.html">Une vie pour Dieu au quotidien</a></li>
                                              
                                                </ul> -->
                                            </li>
                                                














                                        </ul>
                                    </nav>
                                    <!--searchform button-->
                                    <div class="relative d_inline_m search_buttons d_xs_none">
                                        <button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-cancel"></i></button>
                                        <button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-search"></i></button>
                                    </div>
                                    <!--searchform-->
                                    <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
                                        <input type="text" name="search" placeholder="Search" class="r_corners d_inline_m">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


 
            </header>















                 <!-- <body class="sticky_menu"> -->
   
        <div class="wide_layout bg_light">               
         

               @yield('contenu')

               <hr class="divider_type_2"> 

               </div>

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
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>



            
            
            
            <!--footer-->
            <footer role="contentinfo" class="bg_light_3">
                <!--top part-->
                






     <!--

                <section class="footer_top_part">
                   
                        
                    <div class="container relative">
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_30">
                                <h5 class="color_dark fw_light m_bottom_20">Contact Us</h5>
                                <ul class="vr_list_type_5 color_dark m_bottom_12 fw_light w_break">
                                    <li class="m_bottom_8">
                                        <div class="icon_wrap_size_1 circle color_pink f_left">
                                            <i class="icon-phone-1 fs_medium"></i>
                                        </div>
                                        (123)-456-7890
                                    </li>
                                    <li class="m_bottom_8">
                                        <div class="icon_wrap_size_1 circle color_pink f_left">
                                            <i class="icon-mail-alt fs_small"></i>
                                        </div>
                                        <a href="mailto:#" class="color_dark color_pink_hover tr_all">info@companyname.com</a>
                                    </li>
                                    <li class="m_bottom_8">
                                        <div class="icon_wrap_size_1 circle color_pink f_left">
                                            <i class="icon-skype fs_medium"></i>
                                        </div>
                                        skypename
                                    </li>
                                    <li class="color_default">
                                        <div class="d_inline_m icon_wrap_size_1 color_pink circle m_right_10">
                                            <i class="icon-location"></i>
                                        </div>
                                        8901 Marmora Road, Glasgow, D04 89GR.
                                    </li>
                                </ul>
                                <a href="https://www.google.com/maps/place/%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA/@40.7056308,-73.9780035,11z/data=!3m1!4b1!4m2!3m1!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62" target="_blank" class="button_type_2 color_dark r_corners tr_all color_pink_hover d_inline_m fs_medium t_md_align_c w_break">Open in Google Maps</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 m_bottom_50 m_xs_bottom_30">
                                <h5 class="color_dark fw_light m_bottom_20">Stores</h5>
                                <ul class="vr_list_type_4 color_dark fw_light w_break">
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            New York
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Paris
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            London
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Madrid
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Tokio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Milan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 m_bottom_50 m_xs_bottom_30">
                                <h5 class="color_dark fw_light m_bottom_20">Information</h5>
                                <ul class="vr_list_type_4 color_dark fw_light w_break">
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Order tracking
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Privacy policy
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Gift cards
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Shipping Info
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Returns &amp; refunds
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Delivery info
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 m_bottom_50 m_xs_bottom_30">
                                <h5 class="color_dark fw_light m_bottom_20">Our Offers</h5>
                                <ul class="vr_list_type_4 color_dark fw_light w_break">
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            New products
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Top sellers
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Specials
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Manufacturers
                                        </a>
                                    </li>
                                    <li class="m_bottom_12">
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Suppliers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color_dark d_inline_b">
                                            <span class="icon_wrap_size_0 circle color_grey_light_5 d_block tr_inherit f_left">
                                                <i class="icon-angle-right"></i>
                                            </span>
                                            Specials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_50 m_xs_bottom_30">
                                <h5 class="color_dark fw_light m_bottom_20">Newsletter</h5>
                                <p class="fw_light m_bottom_25">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                                <form class="subscribe_send_form">
                                    <ul>
                                        <li class="m_bottom_20">
                                            <input type="email" name="subscribe_email" placeholder="Your email address" class="r_corners bg_light w_full fw_light">
                                        </li>
                                        <li>
                                            <button class="fs_medium button_type_2 color_purple transparent r_corners tr_all">Subscribe</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>

                            








                    

                    <hr class="m_bottom_45 divider_type_3 m_xs_bottom_30">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-lg-6 col-md-7 col-sm-6 m_bottom_30 m_xs_bottom_20">
                                <ul class="hr_list social_icons">
                                    
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
                                        <a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-facebook fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
                                        <a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-twitter fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Google Plus</span>
                                        <a href="#" class="d_block googleplus icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-gplus-1 fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Pinterest</span>
                                        <a href="#" class="d_block pinterest icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-pinterest fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 m_md_right_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Dribbble</span>
                                        <a href="#" class="d_block dribbble icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-dribbble fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Flickr</span>
                                        <a href="#" class="d_block flickr icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-flickr-1 fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Youtube</span>
                                        <a href="#" class="d_block youtube icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-youtube-play fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Vimeo</span>
                                        <a href="#" class="d_block vimeo icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-vimeo fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_right_15 m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">Instagram</span>
                                        <a href="#" class="d_block instagram icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-instagramm fs_small"></i>
                                        </a>
                                    </li>
                                    <li class="m_bottom_15 tooltip_container">
                                       
                                        <span class="d_block r_corners color_default tooltip fs_small tr_all">LinkedIn</span>
                                        <a href="#" class="d_block linkedin icon_wrap_size_2 circle color_grey_light_2">
                                            <i class="icon-linkedin-squared fs_small"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-6 m_xs_bottom_30 t_xs_align_l t_align_r">
                                <ul class="hr_list d_inline_b">
                                    <li class="m_right_5 m_sm_bottom_5"><img src="images/payment_1.png" alt=""></li>
                                    <li class="m_right_5 m_sm_bottom_5"><img src="images/payment_2.png" alt=""></li>
                                    <li class="m_right_5 m_sm_bottom_5"><img src="images/payment_3.png" alt=""></li>
                                    <li class="m_right_5 m_sm_bottom_5"><img src="images/payment_4.png" alt=""></li>
                                    <li class="m_right_5 m_sm_bottom_5"><img src="images/payment_5.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                -->
                <!--bottom part-->
                <section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
                    <p>&copy; 2018 SIKSE. Tout Droit Reserve.</p>
                </section>
            </footer>
            
            
            
            
            
        </div>
        <!--back to top button-->
        <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
            <i class="icon-angle-up fs_large"></i>
        </button>


<!--

                <script src="plugins/layerslider/js/greensock.js"></script>
        <script src="plugins/layerslider/js/layerslider.transitions.js"></script>
        <script src="plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="plugins/isotope.pkgd.min.js"></script>
-->



              {{Html::script('default-css/plugins/isotope.pkgd.min.js')}}

         {{Html::script('default-css/plugins/layerslider/js/greensock.js')}}
               {{Html::script('default-css/plugins/layerslider/js/layerslider.transitions.js')}}
                     {{Html::script('default-css/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js')}}  

                     
        <!--Libs-->
        <!--<script src="plugins/jquery.iosslider.min.js"></script> -->
        {{Html::script('default-css/plugins/jquery.iosslider.min.js')}}
        <!--<script src="plugins/jquery.appear.js"></script>-->
        {{Html::script('default-css/plugins/jquery.appear.js')}}
       <!-- <script src="plugins/afterresize.min.js"></script>-->
        {{Html::script('default-css/plugins/afterresize.min.js')}}
       <!-- <script src="plugins/jquery.easytabs.min.js"></script> -->
        {{Html::script('default-css/plugins/jquery.easytabs.min.js')}}

       <!-- <script src="plugins/owl-carousel/owl.carousel.min.js"></script> -->
        
          {{Html::script('default-css/plugins/owl-carousel/owl.carousel.min.js')}}

       <!-- <script src="plugins/jackbox/js/jackbox-packed.min.js"></script> -->

        {{Html::script('default-css/plugins/jackbox/js/jackbox-packed.min.js')}}
        <!--<script src="plugins/twitter/jquery.tweet.min.js"></script>-->
         
         {{Html::script('default-css/plugins/twitter/jquery.tweet.min.js')}}
        
        <!--<script src="plugins/flickr.js"></script> -->
         {{Html::script('default-css/plugins/flickr.js')}}

       <!-- <script src="plugins/jquery.easing.1.3.js"></script> -->
         
         {{Html::script('default-css/plugins/jquery.easing.1.3.js')}}         
        
        <!--Theme Initializer-->
       <!-- <script src="js/theme.plugins.js"></script>-->
        {{Html::script('default-css/js/theme.plugins.js')}}

        <!--<script src="js/theme.js"></script> -->
         {{Html::script('default-css/js/theme.js')}}

       
      


    </body>
</html>