<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything through the intro.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Tacoma Gallery - Tacoma, WA">
<meta name="author" content="Tyler Savin">
<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/themes/js2017/assets/ico/favicon.png">
<title>Tacoma Art Gallery</title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php echo site_url(); ?>/wp-content/themes/js2017/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/js2017/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/js2017/css/reset.css" rel="stylesheet">
<!--<link href="<?php echo site_url(); ?>/wp-content/themes/js2017/css/lightbox.min.css" rel="stylesheet">-->
<link href="<?php echo site_url(); ?>/wp-content/themes/js2017/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>

<header>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-3 header-logo">
        <span class="header-name"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/js2017/assets/images/TacomaLogo.png" /></a></span>
        </div>
        <div class="navBtn"><i class="fa fa-bars"></i></div>
        <div class="col-xs-12 col-sm-9 navigation">
            <nav class="navbar"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
        </div>
    </div>
</div>
</header>

<main>