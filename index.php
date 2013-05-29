<?php
/**
 * @package    Nome_do_Template
 * @subpackage  tpl_nome_do_template
 * @copyright  Copyright (C) AtomTech, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// define variables
$path = $this->baseurl . '/templates/' . $this->template;
$app = JFactory::getApplication();
$frontend = JRequest::getVar('view') == 'featured';

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>" class="no-js"> <!--<![endif]-->
	<head>
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?php echo $path ?>/css/normalize.css.css" rel="stylesheet">
		<link href="<?php echo $path ?>/css/template.css" rel="stylesheet">
		<script src="<?php echo $path ?>/js/vendor/modernizr-2.6.2.min.js"></script>


	<!--[if IE]>
	    <style type="text/css">
	        .timer { display: none !important; }
	        div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
	    </style>
	<![endif]-->
	</head>
	<body>
	<!--[if lt IE 7]>
        <p class="chromeframe">Você está usando um <strong>Navegador Antigo</strong>. Por favor, <a href="http://browsehappy.com/">Atualize seu Navegador</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a> pra melhorar sua experiência.</p>
    <![endif]-->




    <!--

    CONTEUDO

	-->




	<!-- jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $path ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <!-- principais -->
    <script src="<?php echo $path ?>/js/plugins.js"></script>
    <script src="<?php echo $path ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
	</body>
</html>
