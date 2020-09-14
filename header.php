<!DOCTYPE html>

<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>
	<!--[if IE ]><script type="text/javascript" src="https://imobiliariaprisma.com/admin/inc/js/css3-mediaqueries.js"></script><![endif]-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php	

	wp_enqueue_style('CorporateS', get_template_directory_uri() . '/fonts/CorporateS.css');	
	wp_enqueue_style('CorporateA-C', get_template_directory_uri() . '/fonts/CorporateA-C.css');			
	wp_enqueue_style('CorporateS-D', get_template_directory_uri() . '/fonts/CorporateSDemi.css');
	wp_enqueue_script( 'AL-js', get_template_directory_uri() . '/js/almenus.js');
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('d-style', get_template_directory_uri() . '/css/d-style.css');
	wp_enqueue_style('header', get_template_directory_uri() . '/css/home.css' );	
	wp_head();
?>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if IE]><link rel="shortcut icon" href="<?=get_template_directory_uri()?>/imgs/favicon-192x192.ico"><![endif]-->
<link rel="icon" href="<?=get_template_directory_uri()?>/imgs/favicon-192x192.png" />
<title><?php wp_title(); ?></title>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class('ct-body'); ?>>

<div id="overflow-container" class="overflow-container">
    <header id="site-header" class="site-header" role="banner">
    
	<div id='meta-navigation' class='meta-navigation'>
		<?php if( has_nav_menu( 'meta' ) ) : get_template_part( 'menu', 'meta' ); endif; ?>
        </div>

        <picture id="img-logo">
        <source srcset="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png x2" media="(min-width: 768px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/d.mb.2018.64.fw.png x1" media="(min-width: 768px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/m.mb.2018.80.fw.png x2" media="(min-width: 480px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/m.mb.2018.80.fw.png x1" media="(min-width: 480px)">
        <img class="img-responsive" src="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png" srcset="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png, <?=get_template_directory_uri()?>/imgs/d.mb.2018.64.fw.png, <?=get_template_directory_uri()?>/imgs/m.mb.2018.80.fw.png, <?=get_template_directory_uri()?>/imgs/m.mb.2018.40.fw.png">
        </picture>
        
        <div id="menu-primary" class="menu-container menu-primary" role="navigation" style='display:none'>
            <div id="menu-button"></div>
        	<?php get_template_part( 'menu', 'main' ); ?>
        </div>
        
        <div id="title-info" class="title-info">
		    
		    <div style="clear:both">
		        <?php get_template_part('logo')  ?>
		        <div id="blog-descrp"><?php bloginfo('description'); ?></div>
		        </div>
        </div>
        
        <div class="model_navigation" id="model_navigation">         
            <?php get_template_part( 'menu', 'model' ); ?>        
        </div>
    
    </header>
    <div id="main" class="main" role="main">