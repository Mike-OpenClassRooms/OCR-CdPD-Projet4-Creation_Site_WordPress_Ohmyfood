<?php

/**
 * Template Name: Restaurant
 */

get_header();

?>

<!-- le contenu de la page -->
<main class="restaurant-page">
	<!-- Hero / Card Restaurant -->
	<section class="hero-mobile">
		<!-- Version Mobile : Image principale -->
		<div class="hero-card-mobile">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor.jpg" alt="Image du restaurant L’Ambroisie d’Or">
			</picture>
			<div class="img-counter">1/12</div>
		</div>
		<div class="actions-mobile">
			<div class="back-button">
				<a href="<?php echo home_url('/'); ?>" class="btn-mobile-hero" aria-label="Retour à l’accueil">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M15.4571 17.9571C15.8476 17.5666 15.8476 16.9334 15.4571 16.5429L10.6642 11.75L15.4571 6.95711C15.8476 6.56658 15.8476 5.93342 15.4571 5.54289C15.0666 5.15237 14.4334 5.15237 14.0429 5.54289L8.54289 11.0429C8.15237 11.4334 8.15237 12.0666 8.54289 12.4571L14.0429 17.9571C14.4334 18.3476 15.0666 18.3476 15.4571 17.9571Z" fill="#222222" />
					</svg>
				</a>
			</div>
			<div class="actions-btn-right">
				<button class="btn-share">
					<div class="btn-mobile-hero">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M15.5 10.5H16C17.3807 10.5 18.5 11.6193 18.5 13V19C18.5 20.3807 17.3807 21.5 16 21.5H8C6.61929 21.5 5.5 20.3807 5.5 19V13C5.5 11.6193 6.61929 10.5 8 10.5H8.5" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M12 2V15M12 2L8 6M12 2L16 6" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
				</button>
				<button class="btn-favorite">
					<div class="btn-mobile-hero">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 20.1445L11.3911 19.7863C7.09286 17.2568 4.63777 14.74 3.41989 12.522C2.12195 10.1582 2.22507 8.14077 2.96272 6.6936C4.48246 3.71206 8.78026 2.80617 11.3721 6.08425L11.9996 6.87789L12.6272 6.08429C15.2195 2.80607 19.5175 3.71215 21.0372 6.6936C21.7749 8.14075 21.8779 10.1582 20.5799 12.522C19.3619 14.74 16.9067 17.2568 12.6083 19.7863L11.9997 20.1445ZM11.9996 8.81261L10.4308 6.82852C8.41309 4.27658 5.17779 4.99036 4.03184 7.23855C3.49793 8.28602 3.33892 9.88136 4.47174 11.9444C5.55151 13.9109 7.81509 16.2895 11.9997 18.7521C16.1845 16.2894 18.4482 13.9108 19.5281 11.9444C20.661 9.8813 20.502 8.28598 19.9681 7.23855C18.8222 4.99049 15.5866 4.27642 13.5684 6.82862L11.9996 8.81261Z" fill="black" />
						</svg>
					</div>
				</button>
			</div>
		</div>
	</section>

	<!-- Version Desktop : Carousel ou plusieurs images -->
	<div class="hero-desktop">
		<div class="card-restaurant">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-02.webp" type="image/webp">
				<img class="card-restaurant__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-02.jpg" alt="Image secondaire 1">
			</picture>
		</div>
		<div class="card-restaurant">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-03.webp" type="image/webp">
				<img class="card-restaurant__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-03.jpg" alt="Image secondaire 2">
			</picture>
		</div>
		<div class="card-restaurant">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-04.webp" type="image/webp">
				<img class="card-restaurant__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-04.jpg" alt="Image secondaire 3">
			</picture>
		</div>
		<div class="card-restaurant">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-05.webp" type="image/webp">
				<img class="card-restaurant__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor-05.jpg" alt="Image secondaire 4">
			</picture>
		</div>
	</div>
	</section>

	<!-- Infos Restaurant -->
	<section class="restaurant-infos" style="padding-inline: 23px;">
		<h1>L’Ambroisie d’Or</h1>
		<p class="restaurant-type">Cuisine terroir raffinée</p>
		<p class="restaurant-location">Paris, 8e</p>
		<div class="restaurant-rating">
			<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none" class="star-icon">
				<path d="M10.5 0L12.8574 7.25532H20.4861L14.3143 11.7394L16.6717 18.9947L10.5 14.5106L4.32825 18.9947L6.68565 11.7394L0.513906 7.25532H8.1426L10.5 0Z" fill="black" />
			</svg>
			<span class="rating-value">4.9</span>
			<span class="review-divider"></span>
			<a href="#avis" class="review-link">25 avis</a>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section Chef -->
	<section class="chef" style="padding-inline: 23px;">
		<div class="chef-avatar">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/avatars/chef-jm-ferrand.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatars/chef-jm-ferrand.jpg" alt="Chef Jean-Michel Ferrand">
			</picture>
		</div>
		<div class="chef-description">
			<h2>Jean-Michel Ferrand</h2>
			<p class="chef-bio">Chef étoilé spécialiste d’une cuisine raffinée, fusion subtile entre tradition et modernité.</p>
			<div class="read-more">
				<span>Lire plus</span>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
					<path d="M5.25 1.75L10.1937 6.69375C10.2739 6.77553 10.3188 6.88548 10.3188 7C10.3188 7.11452 10.2739 7.22447 10.1937 7.30625L5.25 12.25" stroke="#0A0A0A" stroke-width="2" />
				</svg>
			</div>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Présentation du restaurant -->
	<section class="presentation" style="padding-inline: 23px;">
		<p class="presentation-text">
			Au cœur du prestigieux 8e arrondissement de Paris, <strong>L’Ambroisie d’Or</strong> propose une expérience culinaire haut de gamme où se rencontrent saveurs traditionnelles et créativité audacieuse. Sa carte, évoluant au rythme des saisons, met à l’honneur des spécialités raffinées telles que ...
		</p>
		<div class="read-more">
			<span>Lire la suite</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
				<path d="M6 2L11.65 7.65C11.7416 7.74346 11.7929 7.86912 11.7929 8C11.7929 8.13088 11.7416 8.25654 11.65 8.35L6 14" stroke="#0A0A0A" stroke-width="2" />
			</svg>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Boutons Menu / Voir les avis -->
	<section class="actions-buttons" style="padding-inline: 23px;">
		<button class="btn-menu">Menu</button>
		<button class="btn-avis">Voir les avis</button>
	</section>

	<div class="divider"></div>

	<!-- Avantages -->
	<section class="advantages" style="padding-inline: 23px;">
		<h2>Les plus</h2>
		<div class="advantage">
			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">
				<g clip-path="url(#clip0_71_254)">
					<path d="M10.1109 23.4C12.5156 20.3906 18 13.0969 18 9C18 4.03125 13.9688 0 9 0C4.03125 0 0 4.03125 0 9C0 13.0969 5.48438 20.3906 7.88906 23.4C8.46562 24.1172 9.53438 24.1172 10.1109 23.4ZM9 6C9.79565 6 10.5587 6.31607 11.1213 6.87868C11.6839 7.44129 12 8.20435 12 9C12 9.79565 11.6839 10.5587 11.1213 11.1213C10.5587 11.6839 9.79565 12 9 12C8.20435 12 7.44129 11.6839 6.87868 11.1213C6.31607 10.5587 6 9.79565 6 9C6 8.20435 6.31607 7.44129 6.87868 6.87868C7.44129 6.31607 8.20435 6 9 6Z" fill="#0D1B2A" />
				</g>
				<defs>
					<clipPath id="clip0_71_254">
						<rect width="18" height="24" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<p>Emplacement au cœur de Paris</p>
		</div>
		<div class="advantage">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 0 24 19" fill="none">
				<g clip-path="url(#clip0_71_260)">
					<path d="M12.1262 3.16172L8.53398 6.07109C7.93652 6.55352 7.82148 7.42187 8.27422 8.0416C8.75293 8.70215 9.68437 8.83203 10.3264 8.33105L14.0113 5.46621C14.2711 5.26582 14.6422 5.31035 14.8463 5.57012C15.0504 5.82988 15.0021 6.20098 14.7424 6.40508L13.9668 7.00625L20.5426 13.0625H22.0938C23.0771 13.0625 23.875 12.2646 23.875 11.2812V6.53125C23.875 5.54785 23.0771 4.75 22.0938 4.75H19.2734H19.125H19.099L18.9543 4.65723L16.2602 2.93164C15.6924 2.56797 15.0281 2.375 14.3527 2.375C13.5437 2.375 12.757 2.65332 12.1262 3.16172ZM12.9723 7.77812L11.0537 9.26992C9.88477 10.1828 8.18887 9.94531 7.31309 8.74297C6.48926 7.61113 6.69707 6.03027 7.78437 5.15078L10.8719 2.65332C10.4414 2.47148 9.97754 2.37871 9.50625 2.37871C8.80859 2.375 8.12949 2.58281 7.54688 2.96875L4.875 4.75H1.90625C0.922852 4.75 0.125 5.54785 0.125 6.53125V11.2812C0.125 12.2646 0.922852 13.0625 1.90625 13.0625H5.92148L9.31328 16.1574C10.0406 16.8217 11.165 16.7697 11.8293 16.0424C12.0334 15.816 12.1707 15.5525 12.2412 15.2779L12.8721 15.8568C13.5957 16.5211 14.7238 16.4728 15.3881 15.7492C15.5551 15.5674 15.6775 15.3559 15.7555 15.1369C16.4754 15.6193 17.4551 15.5191 18.06 14.8586C18.7242 14.135 18.676 13.0068 17.9523 12.3426L12.9723 7.77812Z" fill="#0D1B2A" />
				</g>
				<defs>
					<clipPath id="clip0_71_260">
						<rect width="23.75" height="19" fill="white" transform="translate(0.125)" />
					</clipPath>
				</defs>
			</svg>
			<p>Idéal pour les repas d’affaires</p>
		</div>
		<div class="advantage">
			<svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
				<g clip-path="url(#clip0_93_530)">
					<path d="M19.5 0C18.75 0 13.5 1.5 13.5 8.25V13.5C13.5 15.1547 14.8453 16.5 16.5 16.5H18V22.5C18 23.3297 18.6703 24 19.5 24C20.3297 24 21 23.3297 21 22.5V16.5V11.25V1.5C21 0.670312 20.3297 0 19.5 0ZM3 0.75C3 0.365625 2.71406 0.046875 2.32969 0.0046875C1.94531 -0.0375 1.60313 0.215625 1.51875 0.585938L0.0984375 6.975C0.0328125 7.27031 0 7.57031 0 7.87031C0 10.0219 1.64531 11.7891 3.75 11.9813V22.5C3.75 23.3297 4.42031 24 5.25 24C6.07969 24 6.75 23.3297 6.75 22.5V11.9813C8.85469 11.7891 10.5 10.0219 10.5 7.87031C10.5 7.57031 10.4672 7.27031 10.4016 6.975L8.98125 0.585938C8.89688 0.210938 8.54531 -0.0375 8.16562 0.0046875C7.78594 0.046875 7.5 0.365625 7.5 0.75V7.04062C7.5 7.29375 7.29375 7.5 7.04062 7.5C6.80156 7.5 6.60469 7.31719 6.58125 7.07812L5.99531 0.684375C5.9625 0.295313 5.63906 0 5.25 0C4.86094 0 4.5375 0.295313 4.50469 0.684375L3.92344 7.07812C3.9 7.31719 3.70312 7.5 3.46406 7.5C3.21094 7.5 3.00469 7.29375 3.00469 7.04062L3 0.75ZM5.26406 7.875H5.25H5.23594L5.25 7.84219L5.26406 7.875Z" fill="#0D1B2A" />
				</g>
				<defs>
					<clipPath id="clip0_93_530">
						<rect width="21" height="24" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<p>Risotto crémeux à la truffe blanche</p>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Carte et Adresse -->
	<section class="map" style="padding-inline: 23px;">
		<div class="address-infos">
			<h2>Où est situé le restaurant</h2>
			<p class="address">Adresse :<br>
				114 rue du Faubourg Saint-Honoré, 75008 Paris</p>
			<div class="infos-transports">
				<div class="transport">
					<p>Miromesnil</p>
				</div>
				<div class="transport">
					<p>Franklin D. Roosevelt</p>
				</div>
				<div class="transport">
					<p>Matignon — Saint-Honoré</p>
				</div>
			</div>
		</div>
		<div class="map-container">
			<svg xmlns="http://www.w3.org/2000/svg" width="33" height="52" viewBox="0 0 33 52" fill="none">
				<path d="M2.125 14.625C2.125 10.8788 3.61317 7.28607 6.26212 4.63712C8.91107 1.98817 12.5038 0.5 16.25 0.5C19.9962 0.5 23.5889 1.98817 26.2379 4.63712C28.8868 7.28607 30.375 10.8788 30.375 14.625C30.375 18.3712 28.8868 21.9639 26.2379 24.6129C23.5889 27.2618 19.9962 28.75 16.25 28.75C12.5038 28.75 8.91107 27.2618 6.26212 24.6129C3.61317 21.9639 2.125 18.3712 2.125 14.625ZM16.25 8.625C17.4199 8.625 18.375 7.66989 18.375 6.5C18.375 5.33011 17.4199 4.375 16.25 4.375C10.591 4.375 6 8.96605 6 14.625C6 15.7949 6.95511 16.75 8.125 16.75C9.29489 16.75 10.25 15.7949 10.25 14.625C10.25 11.316 12.941 8.625 16.25 8.625ZM13.5 48.75V32.7953C14.3988 32.9299 15.3174 33 16.25 33C17.1826 33 18.1012 32.9299 19 32.7953V48.75C19 50.2715 17.7715 51.5 16.25 51.5C14.7285 51.5 13.5 50.2715 13.5 48.75Z" fill="#D4AF37" stroke="#7D2A2A" />
			</svg>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Réservation -->
	<section class="booking" style="padding-inline: 23px;">
		<h2>Réservez votre table</h2>
		<div class="reservation-calendar">
			<!-- Placeholder calendrier -->
		</div>
	</section>
</main>

<?php

get_footer();
?>