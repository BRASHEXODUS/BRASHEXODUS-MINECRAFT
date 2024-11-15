<?php

		// Error handling
		function error($a, $b) {
			echo '
			<div class="php-error">
				<i class="icon fa-solid fa-triangle-exclamation"></i>
				<p>'.$a.'</p>
				<p>'.$b.'</p>
				<a href="https://discord.gg/cRwXb7vqQx" target="_blank"><i class="fa-solid fa-headset"></i> Get Support</a>
			</div>';
			die();
		}
	
		// Open config connection
		try {
			include 'config.php';
			$c = new Config();
		} catch (Exception $e) {
			error($e->getMessage(), 'Config Location Line: '.$e->getLine());
		} catch(ParseError $e) {
			error($e->getMessage(), 'Config Location Line: '.$e->getLine());
		}

		$ping = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$c::IP));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, minimum-scale=1">
	<title><?php echo $c::NAME ?></title>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" id="themeLink" href="css/themes/default.css"/>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>