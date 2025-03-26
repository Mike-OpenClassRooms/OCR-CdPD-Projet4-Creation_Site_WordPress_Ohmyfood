<?php

/**
 * Template Name: Restaurant
 */

get_header();

?>
<!-- le contenu de la page  -->

<main class="restaurant-page">
	<!-- Card restaurant -->
	<section class="restaurant-card">
		<div class="restaurant-image-container">
			<img src="path/to/image.jpg" alt="Image du restaurant" class="restaurant-image">
			<div class="top-buttons">
				<button class="btn-back">
					<!-- SVG retour -->
				</button>
				<div class="btn-group">
					<button class="btn-share">
						<!-- SVG partage -->
					</button>
					<button class="btn-favorite">
						<!-- SVG cœur -->
					</button>
				</div>
			</div>
			<div class="image-counter">1/12</div>
		</div>
		<div class="restaurant-infos">
			<h1>Nom du restaurant</h1>
			<p class="restaurant-type">Cuisine gastronomique</p>
			<p class="restaurant-location">Paris, 8e</p>
			<div class="restaurant-rating">
				<span class="star-icon">★</span>
				<span class="rating-value">4.9</span>
				<span class="review-divider"></span>
				<a href="#avis" class="review-link">25 avis</a>
			</div>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section chef -->
	<section class="chef-section">
		<div class="chef-avatar">
			<img src="path/to/avatar.jpg" alt="Chef">
		</div>
		<div class="chef-description">
			<div class="chef-text">
				<h2>Nom du Chef</h2>
				<p class="chef-bio">Petite biographie rapide du chef.</p>
			</div>
			<div class="read-more">
				<span>Lire plus</span>
				<!-- SVG chevron -->
			</div>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section présentation restaurant -->
	<section class="restaurant-presentation">
		<p class="presentation-text">
			Bienvenue à <strong>L’Ambroisie d’Or</strong>, une expérience unique...
		</p>
		<div class="read-more">
			<span>Lire la suite</span>
			<!-- SVG chevron -->
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section boutons menu et avis -->
	<section class="restaurant-buttons">
		<button class="btn-menu">Menu</button>
		<button class="btn-avis">Voir les avis</button>
	</section>

	<div class="divider"></div>

	<!-- Section avantages -->
	<section class="restaurant-advantages">
		<h2>Les plus</h2>
		<div class="advantage">
			<!-- SVG -->
			<p>Terrasse ensoleillée</p>
		</div>
		<div class="advantage">
			<!-- SVG -->
			<p>Accès PMR</p>
		</div>
		<div class="advantage">
			<!-- SVG -->
			<p>Menus végétariens</p>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section carte et adresse -->
	<section class="restaurant-map">
		<div class="address-infos">
			<h2>Où nous trouver</h2>
			<p class="address">12 rue Exemple, 75008 Paris</p>
			<div class="infos-transports">
				<div class="transport">
					<!-- SVG -->
					<p>Métro ligne 1 - Champs-Élysées</p>
				</div>
				<div class="transport">
					<!-- SVG -->
					<p>Bus 32 - Arrêt Exemple</p>
				</div>
				<div class="transport">
					<!-- SVG -->
					<p>Parking Vinci à 200m</p>
				</div>
			</div>
		</div>
		<div class="map-container">
			<div class="map-icon">
				<!-- SVG icône map -->
			</div>
		</div>
	</section>

	<div class="divider"></div>

	<!-- Section réservation -->
	<section class="restaurant-reservation">
		<h2>Réserver</h2>
		<div class="reservation-calendar">
			<!-- Placeholder calendrier -->
		</div>
	</section>
</main>

<?php

get_footer();
