<?php

	include 'connect.php';

	//Routes

	$tpl 	= 'includes/templates/'; // Template Directory
	$lang 	= 'includes/languages/'; // Language Directory
	$func 	= 'includes/functions/'; // Functions Directory
	$css 	= 'layout/css/'; // Css Directory
	$js 	= 'layout/js/'; // Js Directory

	// Include The Important Files
	
	include $func . 'function.php';
	include $lang . 'english.php';
	include $tpl .'header.php';

	// Include Navbar On All Pages Expect The One With $noNavbar Variable

	if (!isset($noNavbar)) { include $tpl . 'navbar.php'; }
