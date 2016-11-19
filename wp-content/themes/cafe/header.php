<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('&laquo;',true, 'right');?><?php bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    
	<!-- CSS STYLES -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
	   <link href="<?php bloginfo('template_url');?>/css/ie6.css" rel="stylesheet" />
	<![endif]-->
	<?php if (is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet"> 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Sail' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<!--надо поискать шрифті-->
	<!-- SCRIPTS -->
	<!--[if lt IE 9]> 
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
	<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]-->
	<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]-->
	<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
	<?php  wp_head(); ?>
	<script type="text/javascript">
$(document).ready(function(){
    var first = 0;
    var speed = 700;
    var pause = 3500;
 
        function removeFirst(){
            first = $('#listticker li:last').html();
            $('#listticker li:last').remove();
            addLast(first);
        }
 
        function addLast(first){
            last = '<li style="display:none">'+first+'</li>';
            $('#listticker ul').find("li:eq(4)").animate({opacity: "0"}, "800", function() {
                $('#listticker ul').prepend(last);
                $('#listticker li:first').css({opacity: "0"}).slideDown(function(){
                       $(this).css({opacity: "1"});
                });
            })
        }
    interval = setInterval(removeFirst, pause);
});
</script>
</head>
<body>
	<!-- PRELOADER -->
<!--<div id="preloader"><img src="images/preloader.gif" alt="" /></div> -->
<!-- //PRELOADER -->

<!-- PAGE -->

<div id="page">
  
	     <!-- PAGE BLOCK -->
		    <div class="page_block">
			     <!-- HEADER -->
				    <header id="header" class="site-header wide" style="margin-top: 0px;">
					      <div class="container-fluid invert">
						      <div class="row_menu">
							      <div class="col-xs-12 col-lg-12 col-xl-3 cf">
								  
								      <?php wp_nav_menu(array('theme_location'=> 'sidebar_menu','menu_class'=>'main-navigation sf-menu sf-js-enabled sf-arrows','container'=>'false') ); ?>
										 <address class="contact-info">
                             <p><a href="callto:#">1-800-1234-567</a></p>
                  </address>
				  
								  </div>
								  
								  
								  
								   <div class="col-xs-12 col-lg-12 col-xl-6 hidden-sm-down menus" id="languege">
								      <div id="main-menu" class="menu-main_nav site-menu">
									     <?php wp_nav_menu(array('theme_location'=> 'menu','menu_class'=>'main-navigation sf-menu sf-js-enabled sf-arrows','container'=>'false') ); ?>
										 
									      
										 <!--<ul id="menu-main-menu" class="main-navigation sf-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
										     <li id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98 item-type-7">
											     <a href="#home" class="sf-with-ul">Home</a>
												 <span class="title-attributes"></span>
											 </li>
										     <li id="menu-item-116" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-116 item-type-3">
											      <a href="#" class="sf-with-ul">news</a>
												  <span class="title-attributes"></span>
											 </li>
										     <li id="menu-item-120" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-120 item-type-2">
											    <a href="#" class="sf-with-ul">Our Menu</a>
												<span class="title-attributes"></span>
											 </li>
										     <li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184 item-type-5">
											     <a href="#" class="sf-with-ul">gallery</a>
												 <span class="title-attributes"></span>
											 </li>
										     <li id="menu-item-183" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183 item-type-8">
											     <a href="#" class="sf-with-ul">Contacts</a>
												 <span class="title-attributes"></span>
											 </li>
										 </ul>-->
								      </div>
								   </div>
								 
								    <div class="col-xs-12 col-lg-12 col-xl-3 hidden-sm-down br">
									
								      <div class="site-branding">
									  <h1 class="logo">
								<a href="<?php echo get_option('home'); ?>">
								<?php if( !get_option('omr_logo_url' ) ) { ?>
								 <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="" id="logo" / style="">
								 <?php } else { ?>
								 <img src="<?php echo get_option ('omr_logo_url');?>" alt="" id="logo">
								 <?php } ?>
								</a>
							</h1>
									   
									   </div>
								   </div>
					       </div>
							</div>						 
					</header>
					
				 <!-- //HEADER -->
				 
			</div>
			
		 <!-- //PAGE BLOCK -->
	 
   
