<?php

/**
 * Template Name: Accueil
 */

get_header();

?>
<!-- le contenu de la page d'accueil -->

<div class="entry-content">
	<section class="home-search">
		<!-- Champ de recherche visible uniquement en mobile -->
		<div class="mobile-search">
			<div class="search-field">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/search.svg" alt="Recherche" width="18" height="18" />
				<input type="text" placeholder="Rechercher un restaurant" />
				<button class="filter-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/filter.svg" alt="Filtres" width="18" height="18" />
				</button>
			</div>
		</div>
	</section>

	<section class="home-restaurants">
		<!-- Cards restaurants (à dupliquer pour chaque restaurant) -->
		<div class="restaurant-card">
			<div class="card-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/restaurants/restaurant1.jpg" alt="L'Ambroisie d'Or" />
				<button class="heart-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/heart.svg" alt="Ajouter aux favoris" width="32" height="32" />
				</button>
				<div class="card-dots">
					<span class="dot active"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
			<div class="card-info">
				<div class="card-texts">
					<h3>L’Ambroisie d’Or</h3>
					<p class="type">Cuisine terroir raffinée</p>
					<p class="location">Paris, 8e</p>
				</div>
				<div class="rating">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.svg" alt="Note" width="21" height="21" />
					<span>4,9</span>
				</div>
			</div>
		</div>
		<!-- D'autres .restaurant-card suivent -->
	</section>

	<div class="back-home">
		<button class="map-button">
			Carte
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg" alt="Voir la carte" width="16" height="16" />
		</button>
	</div>
</div><!-- .entry-content -->

<?php
get_footer();
?>