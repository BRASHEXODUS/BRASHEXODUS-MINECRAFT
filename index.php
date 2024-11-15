<?php

	include 'inc/head.inc.php';

	// Check if a valid setting has been input in config
	function checkInput($text, $input, $max) {
		if(!($input > 0 && $input < $max+1)) {
			error('Invalid '.$text, $input);
		} else {
			return true;
		}
	}

	// Create variables for config input
	function setVariables($ping, $text) {
		if($ping->online) {
			$text = strtolower($text);
			$vars = array('{players-online}', '{players-max}', '{version}');
			$replace = array(
			'<span class="count">'.$ping->players->online.'</span>', 
			'<span>'.$ping->players->max.'</span>',
			'<span>'.$ping->version.'</span>');
			return str_replace($vars, $replace, $text);
		} else { return 'Unable to retrieve server information'; }
	}

	// Setup background particles
	if($c::PARTICLES_ENABLED) { 
		echo '<div id="particles-js"></div>'; 
	}

	// Setup background image
	if ($c::BACKGROUND_ENABLED) {
		echo '<div style="background-image: url('.$c::BACKGROUND_IMAGE.');" class="pagebg pagebg__enabled"></div>';
	} else { echo '<div class="pagebg pagebg__disabled"></div>'; }

	echo '<div class="wrap">'; // wrapper start

		// Setup loading screen
		if ($c::LOADER_ENABLED) {
			echo '<div class="loader"><div class="icon"></div></div>';
		}

		// Setup theme picker
		if ($c::THEME_PICKER_ENABLED) {
			echo '
			<div class="btnDisplay">
            	<button class="btn btn-theme"><i class="fa-solid fa-droplet"></i></button>
        	</div>';
		}

		// Setup announcements
		$announceMax = 1; // Total amount of announcement types
		if(checkInput('Announcements', $c::ANNOUNCEMENTS_TYPE, $announceMax)) {
			echo '
			<div class="announcements announcements__type'.$c::ANNOUNCEMENTS_TYPE.'">
			<div class="ticker" data-speed="'.$c::TICKER_ROTATION_SPEED.'">';
				foreach($c::ANNOUNCEMENTS as $k => $v) {
					echo '<p> <i class="fas fa-scroll"></i> '.$v.'</p>';
				}
			echo '</div></div>';
		}

		// Setup title
		if($c::TITLE_ENABLED) { 
			echo '<h1 class="title">'.$c::TITLE.'</h1>';
		}

		// Setup logo
		if($c::LOGO_ENABLED) {
			echo '<img class="logo" src="'.$c::LOGO.'">';
		}

		echo '<div class="info">'; // info start

		// Setup ticker
		if($c::TICKER_ENABLED) {
			echo '<div class="ticker" data-speed="'.$c::TICKER_ROTATION_SPEED.'">';
				foreach($c::TICKER_MESSAGES as $m) {
					$m = setVariables($ping, $m);
					echo '<p>'.$m.'</p>';
				}
			echo '</div>';
		}

		// Setup ip box
		if($c::IP_BOX_ENABLED) {
			echo '
			<button class="btn btn-ip">
				<span>'.$c::IP.'</span>
				<div>
					<i class="copy fa-solid fa-link"></i>
					<i class="arrow fa-solid fa-arrow-right"></i>
				</div>
			</button>';
		}

		echo '</div>'; // info end

		// Setup menu
		$menuMax = 2;
		$menuAnimMax = 5;
		if(checkInput('Menu', $c::MENU_TYPE, $menuMax)) {
			if($c::MENU_ANIMATIONS) { // check if menu animations are enabled
				if(checkInput('Menu Animations', $c::MENU_HOVER_ANIMATION, $menuAnimMax)) {
					echo '<div class="menu menu__type'.$c::MENU_TYPE.' menu__anim'.$c::MENU_HOVER_ANIMATION.'">';
				} else { echo '<div class="menu menu__type'.$c::MENU_TYPE.'">'; }
				foreach($c::MENU as $k => $v ) {
					echo '
					<a class="btn-menu" href="'.$v['url'].'">
						<i class="'.$v['icon'].'"></i>
						<img src="img/'.$v['image'].'">
						<p>'.$k.'</p>
					</a>';
				}
				echo '</div>';
			}
		}

		// Setup footer
		$footerMax = 3;
		if($c::FOOTER_ENABLED) {
			if(checkInput('Footer Type', $c::FOOTER_TYPE, $footerMax)) {
				echo '<div class="footer footer__option'.$c::FOOTER_TYPE.'">';
				if($c::SOCIALS_ENABLED) {
					echo '<nav>';
					foreach($c::SOCIALS as $k => $v) {
						echo '<a target="_blank" href="'.$v['url'].'">'.$v['icon'].'</a>';
					}
					echo '</nav>';
				}
				if($c::FOOTER_TRADEMARK_ENABLED) {
					echo '<p>'.$c::FOOTER_TRADEMARK.'';
				}
				echo '</div>';
			}
		}

	echo '</div>'; // wrapper end
	?>
	<script src="js/particles.min.js"></script>
	<script src="js/particles.js"></script>
	<script src="js/functions.js" defer></script>
	</body>
</html>