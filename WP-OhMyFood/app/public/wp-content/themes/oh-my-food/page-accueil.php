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
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
					<path d="M11.9196 11.9196L16.5 16.5M7.84821 13.4464C8.58338 13.4464 9.31135 13.3016 9.99056 13.0203C10.6698 12.739 11.2869 12.3266 11.8067 11.8067C12.3266 11.2869 12.739 10.6698 13.0203 9.99056C13.3016 9.31135 13.4464 8.58338 13.4464 7.84821C13.4464 7.11305 13.3016 6.38508 13.0203 5.70587C12.739 5.02666 12.3266 4.40952 11.8067 3.88968C11.2869 3.36984 10.6698 2.95748 9.99056 2.67614C9.31135 2.3948 8.58338 2.25 7.84821 2.25C6.36348 2.25 4.93955 2.83981 3.88968 3.88968C2.83981 4.93955 2.25 6.36348 2.25 7.84821C2.25 9.33295 2.83981 10.7569 3.88968 11.8067C4.93955 12.8566 6.36348 13.4464 7.84821 13.4464Z" stroke="#0A0A0A" stroke-width="2" />
				</svg>
				<input type="text" placeholder="Rechercher un restaurant" />
				<button class="filter-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
						<path d="M16.5 11.9167H8.42308M8.42308 11.9167C8.42308 12.5355 8.17995 13.129 7.74717 13.5666C7.31439 14.0042 6.72742 14.25 6.11538 14.25C5.50335 14.25 4.91638 14.0042 4.4836 13.5666C4.05082 13.129 3.80769 12.5355 3.80769 11.9167C3.80769 11.2978 4.05082 10.7043 4.4836 10.2668C4.91638 9.82917 5.50335 9.58333 6.11538 9.58333C6.72742 9.58333 7.31439 9.82917 7.74717 10.2668C8.17995 10.7043 8.42308 11.2978 8.42308 11.9167ZM9.57692 6.08333H1.5M9.57692 6.08333C9.57692 6.70217 9.82005 7.29566 10.2528 7.73325C10.6856 8.17083 11.2726 8.41667 11.8846 8.41667C12.4967 8.41667 13.0836 8.17083 13.5164 7.73325C13.9492 7.29566 14.1923 6.70217 14.1923 6.08333C14.1923 5.46449 13.9492 4.871 13.5164 4.43342C13.0836 3.99583 12.4967 3.75 11.8846 3.75C11.2726 3.75 10.6856 3.99583 10.2528 4.43342C9.82005 4.871 9.57692 5.46449 9.57692 6.08333Z" stroke="#0A0A0A" stroke-width="2" />
					</svg>
				</button>
			</div>
		</div>
	</section>

	<section class="home-restaurants">
		<!-- Cards restaurants -->
		<div class="restaurant-card">
			<div class="card-image">
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/restaurants/lambroisiedor.jpg" alt="L'Ambroisie d'Or" loading="lazy">
				</picture>
				<button class="heart-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9932 5.13581C9.9938 2.7984 6.65975 2.16964 4.15469 4.31001C1.64964 6.45038 1.29697 10.029 3.2642 12.5604C4.89982 14.6651 9.84977 19.1041 11.4721 20.5408C11.6536 20.7016 11.7444 20.7819 11.8502 20.8135C11.9426 20.8411 12.0437 20.8411 12.1361 20.8135C12.2419 20.7819 12.3327 20.7016 12.5142 20.5408C14.1365 19.1041 19.0865 14.6651 20.7221 12.5604C22.6893 10.029 22.3797 6.42787 19.8316 4.31001C17.2835 2.19216 13.9925 2.7984 11.9932 5.13581Z" fill="#222222" fill-opacity="0.6" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
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
					<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
						<path d="M10.5 0.700012L12.8574 7.95533H20.4861L14.3143 12.4394L16.6717 19.6947L10.5 15.2107L4.32825 19.6947L6.68565 12.4394L0.513906 7.95533H8.1426L10.5 0.700012Z" fill="black" />
					</svg>
					<span>4,9</span>
				</div>
			</div>
		</div>
		<!-- D'autres .restaurant-card suivent -->
	</section>

	<div class="back-home">
		<button class="map-button">
			Carte
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
				<path d="M14.6492 2.8709C14.6209 2.74749 14.5673 2.63069 14.4918 2.52721C14.4162 2.42374 14.3201 2.33564 14.209 2.26797C14.0978 2.19915 13.9736 2.15224 13.8434 2.12995C13.7132 2.10767 13.5797 2.11046 13.4506 2.13817L10.1816 2.8374L5.82284 2L2.11793 2.79135C1.89536 2.83818 1.69617 2.95675 1.55344 3.12737C1.41072 3.29798 1.33306 3.51037 1.33336 3.72924V12.9197C1.33234 13.0817 1.37421 13.2412 1.45503 13.3833C1.53586 13.5254 1.65298 13.6454 1.79539 13.732C1.90655 13.8009 2.03084 13.8478 2.16103 13.87C2.29123 13.8923 2.42474 13.8895 2.5538 13.8618L5.82284 13.1626L10.1816 14L13.8821 13.2087C14.1047 13.1618 14.3039 13.0432 14.4466 12.8726C14.5893 12.702 14.667 12.4896 14.6667 12.2708V3.08025C14.666 3.00976 14.6572 2.93955 14.6405 2.8709H14.6492ZM6.47665 12.1786L5.81848 12.053L5.16903 12.187V3.25192L5.8272 3.11375L6.47665 3.23936V12.1745V12.1786ZM10.8354 12.7481L10.1772 12.8863L9.52775 12.7606V3.82135L10.1859 3.94696L10.8354 3.81298H10.8397V12.7481H10.8354Z" fill="white" />
			</svg>
		</button>
	</div>
</div>

<?php
get_footer();
?>