<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->

<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">

<link href="http://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />

<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<style>
#fundo-cabecalho{
   background-image:url('http://saogoncaloesportes.com.br/wp-content/uploads/2017/11/graxa-header-min1.jpg');
   background-repeat:no-repeat; 
   background-size:cover;
}
@media only screen and (max-width: 500px){
   #fundo-cabecalho{
      background-image:url('http://saogoncaloesportes.com.br/wp-content/uploads/2015/08/saogoncaloesportesblog1.png');
   }
}
</style>

	<header id="masthead" class="site-header" role="banner">
		<nav id="fundo-cabecalho" class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						
						<div class="navbar-header" style="width:100%; max-height:275px;">
							<!--<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>-->

							<?php if( get_header_image() != '' ) : ?>

							<div id="logo" class="row" style="max-height: 210px;  min-height: 210px;  margin: 0 auto;">
								<div class="col-sm-3">
								<!--	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="img-header secundary" src="<?php header_image(); ?>"
									style="max-height: 210px; min-height: 210px; margin-top:3rem; display:block; float: left;" 

									alt="<?php bloginfo( 'name' ); ?>"/></a> -->
								</div>
								<div class="col-sm-6">
<a href="/">
									<img class="img-header" src="http://saogoncaloesportes.com.br/wp-content/uploads/2017/11/head-text.png" style="margin-top: 5.4rem; display: block; width: 32rem; margin-right: auto;" alt="São Gonçalo Esportes"></a>
								</div>
								<div class="col-sm-3">
								<!--	<img class="img-header secundary" src="http://saogoncaloesportes.com.br/wp-content/uploads/2015/08/header-foto1-e1472687284798.png" style="margin-top: 3rem; display: block; width: 18rem; float: right;" alt="São Gonçalo Esportes"> -->
								</div>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed ?>

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="site-name">
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>

						</div>
						<?php// sparkling_header_menu(); // main navigation ?>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
			<div class="row">
				<!-- <div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>"> -->
					<div class="main-content-inner col-sm-12 col-md-10 col-md-offset-1 pull-left">
