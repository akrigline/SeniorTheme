<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package seniorshow
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Teko:300,400,500|Montserrat:400,700' rel='stylesheet' type='text/css'>

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav id="header" class="nav">
    <div class="container-fluid">
      <div class="navbar-header pull-left">
        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <a href="#home"><h6>FINE FOLK</h6></a>

      <button type="button" class="pull-right info" data-toggle="modal" data-target="#myModal">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="216.035 0 863.972 864" enable-background="new 216.035 0 863.972 864" xml:space="preserve"><path fill="rgba(245,245,245,0.65)" d="M645.691 0c-238.551 1.289-430.939 195.715-429.65 434.309C217.289 672.901 411.84 865.248 650.309 864c238.717-1.289 430.98-195.715 429.691-434.267C1078.669 191.057 884.368-1.248 645.691 0zM649.976 793.591c-199.708 0.998-362.277-159.949-363.4-359.657 -1.04-199.666 159.783-362.484 359.491-363.566 199.749-1.082 362.526 160.032 363.607 359.616C1010.714 629.773 849.642 792.51 649.976 793.591zM713.98 621.04l-1.789-322.934 -166.645 1.082 0.333 70.658 45.248-0.249 1.331 252.15 -47.993 0.167 0.374 67.498 209.148-1.123 -0.416-67.457L713.98 621.04zM650.475 250.446c40.757-0.167 65.335-27.449 65.127-60.969 -1.081-34.352-25.036-60.553-64.254-60.386 -39.093 0.249-64.587 26.783-64.42 61.135C587.135 223.704 612.005 250.737 650.475 250.446z"/></svg>
      </button>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-header">
            <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel">Show Information</h3>
          </div>
          <div class="modal-body">
            	<p><span class="red">Opening Reception:</span> FRIDAY 04.24.15</p>
              <p><span class="red">Professionals:</span> 4:30PM&ndash;6:00PM</p>
              <p><span class="red">Family and Friends:</span> 6:00PM&ndash;8:00PM</p>
              <p>
                <span class="red">Emily Davis Gallery,</span> Folk Hall<br>
                150 E. Exchange st.<br>
                Akron, OH 44325&ndash;7801<br>
              </p>
          </div>
        </div>
      </div>
	    <div class="container collapse navbar-collapse" id="navbar-collapse">
	      <ul class="list-unstyled" id="myMenu">
	        <li data-menuanchor="ab"><a href="#ab">A&ndash;B</a></li>
	        <li data-menuanchor="ci"><a href="#ci">C&ndash;I</a></li>
	        <li data-menuanchor="jm"><a href="#jm">J&ndash;M</a></li>
	        <li class="home hidden-xs" data-menuanchor="home"><a href="#home">FINE FOLK</a></li>
	        <li data-menuanchor="np"><a href="#np">N&ndash;P</a></li>
	        <li data-menuanchor="rv"><a href="#rv">R&ndash;V</a></li>
	        <li data-menuanchor="vy"><a href="#vy">V&ndash;Y</a></li>
	      </ul>
	    </div>
    </div><!--/.container-fluid-->
  </nav>