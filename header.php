<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> <?php wp_title(''); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body>


	<div class="wrapper">
    


        <header class='clearfix'>

             <div class = "logo col-xs-12 col-sm-4 col-md-4 col-lg-4">

                 <a href="<?php bloginfo('url');?>">

                    <img src="<?php bloginfo('template_url');?>/images/logo.jpg">

                </a>

            </div>

            <div class="top-menu header-menu col-sm-8 col-md-8 col-lg-8"  id = "headerNav">
                 
                    <?php wp_nav_menu( array('container' => '','menu_class' => 'headmenu') ); ?>
                
            </div>

            <div class = 'top-menu-mobile header-menu col-xs-12'>

                <div class = 'openMobMenu'>

                    <span>Menu</span>

                 </div>

                 <div class = 'slideMenuOpen ' id = "headerNav">

                    <?php wp_nav_menu( array('container' => '','menu_class' => 'headmenu') ); ?>

                </div>

            </div>

            
            
        </header>
    
    	<?php #include 'searchform.php'; ?>