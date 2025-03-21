<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until <main>.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); // Ajoute des classes personnalisées au <html> 
										?>>

<head>
	<!-- Définit l'encodage du site selon la configuration WordPress -->
	<meta charset="<?php bloginfo('charset'); ?>" />

	<!-- Configure le viewport pour un rendu adapté aux appareils mobiles -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Permet aux plugins et au thème d'insérer des éléments dans le <head> (styles, scripts, etc.) -->
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/3c74274841.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); // Ajoute dynamiquement des classes CSS au <body> 
		?>>

	<?php wp_body_open(); // Hook permettant d'insérer du contenu dès l'ouverture du <body> (ex: messages d'accessibilité) 
	?>

	<div id="page" class="site">
		<!-- Lien pour les utilisateurs de lecteurs d'écran ou au clavier afin de passer directement au contenu -->
		<a class="skip-link screen-reader-text" href="#content">
			<?php
			/* Texte traduisible pour l'accessibilité */
			esc_html_e('Skip to content', 'twentytwentyone');
			?>
		</a>

		<!-- Nouveau header -->
		<header>
			<!-- Partie logo & menu du header -->
			<div class="header-top">
				<div class="logo-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/logo-ohmyfood-header.svg" alt="Logo OhMyFood" class="site-logo">
				</div>
				<nav class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class' => 'menu-wrapper',
							'container_class' => 'primary-menu-container',
							'items_wrap' => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb' => false,
						)
					);
					?>
				</nav>
				<nav class="mobile-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'secondary',
							'menu_class' => 'mobile-menu-wrapper',
							'container_class' => 'secondary-menu-container',
							'items_wrap' => '<ul id="mobile-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb' => false,
						)
					);
					?>
				</nav>
				<div class="header-profile">
					<button class="hamburger-menu" aria-label="Menu">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/Menu.svg" alt="Menu" class="menu-icon">
					</button>
					<a href="#" class="profile-link">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/Profile.svg" alt="Profil" class="profile-avatar">
					</a>
				</div>

				<div class="hamburger-mobile">
					<button class="hamburger-menu" aria-label="Menu">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/Menu.svg" alt="Menu" class="menu-icon">
					</button>
				</div>

			</div>
			<!-- Partie recherche du header -->
			<div class="header-bottom">
				<div class="search-bar">
					<div class="search-field">
						<span>Où ?</span>
						<input type="text" placeholder="Rechercher un lieu">
					</div>
					<div class="search-field">
						<span>Quand ?</span>
						<input type="date">
					</div>
					<div class="search-field">
						<span>Service</span>
						<input type="text" placeholder="Midi ou soir ?">
					</div>
					<div class="search-field">
						<span>Personnes</span>
						<input type="number" placeholder="Combien de personnes ?">
					</div>
					<button class="search-button">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M505 442.7l-99.7-99.7c28.4-35.3 45.4-80 45.4-128.8C450.7 98.9 351.8 0 225.3 0S0 98.9 0 225.3s98.9 225.3 225.3 225.3c48.8 0 93.5-17 128.8-45.4l99.7 99.7c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 .1-33.9zM225.3 384c-87.9 0-159.3-71.4-159.3-159.3S137.4 65.3 225.3 65.3 384.7 136.7 384.7 224.7 313.2 384 225.3 384z" />
						</svg>
					</button>
				</div>
			</div>
		</header>

		<!-- Conteneur principal du contenu du site -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<!-- Zone principale de contenu, marquée par la balise <main> pour l'accessibilité -->
				<main id="main" class="site-main">