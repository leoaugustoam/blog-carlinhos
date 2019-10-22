
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 * <html>
 *   <head>
 *       <title>Manutenção</title>
 *       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 *   </head>
 *   <body>
*        <center><br/><br/><br/><br/>
*            <h2><b>Em Manutenção!</b></h2>
*            <h5>Retornaremos ao normal em breve</h5>
 *       </center>
*    </body>
*</html>
 * */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' ); 
?>


