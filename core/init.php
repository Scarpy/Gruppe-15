<?php 
	require 'database/db.php';

	class Init {
   	public static function header(){

   		$content = '
			<!DOCTYPE html>
			<html lang="no">
			<head>
			    <meta charset="utf-8" />
			    <meta name="author" content="Gruppe 15 - PRO100">
				<meta http-equiv="X-UA-Compatible" content="IE=9" />
			    <link rel="stylesheet" href="assets/style.css" type="text/css" />

			    <title>Billigst Øl</title>
			</head>
			<body>
   		';

   		return $content;

   	} // End header

   	public static function footer(){

   		$content = '
			</body>
			</html>
   		';

   		return $content;

   	} // End footer
   }