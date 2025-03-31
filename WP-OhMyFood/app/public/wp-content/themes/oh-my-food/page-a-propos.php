<?php

/**
 * Template Name: A propos 
 */

get_header();

?>
<!-- le contenu de la page -->

<div class="entry-content">

	<section class="about-intro">
		<h1 class="about-title">À PROPOS DE NOUS</h1>

		<div class="image-wrapper">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/illustration-about.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustration-about.jpg" alt="Illustration représentant l'univers d'OhMyFood" class="image-about" loading="lazy" aria-label="Illustration principale de la page À propos d'OhMyFood">
			</picture>
		</div>
	</section>
	<div class="about-text">
		<p>Chez <strong>OhMyFood</strong>, nous croyons que chaque sortie au restaurant doit être une <strong>expérience unique et sans stress</strong>. Fini les longues recherches et les appels infructueux : en quelques clics, réservez <strong>les meilleures tables des restaurants les plus prisés</strong>, testés et sélectionnés par notre équipe d’experts.</p>

		<section class="bloc-about-section" role="region" aria-labelledby="about-mission">
			<h2 id="about-mission">Notre mission : une expérience gastronomique haut de gamme</h2>
			<p><strong>OhMyFood</strong> a été créé avec une idée simple : <strong>offrir une solution rapide et intuitive</strong> pour accéder aux meilleures adresses culinaires. Nous collaborons avec des <strong>chefs renommés et des établissements d’exception</strong>, garantissant une <strong>sélection rigoureuse</strong> et des <strong>plats d’une qualité irréprochable</strong>.</p>
		</section>

		<section class="bloc-about-section" role="region" aria-labelledby="about-values">
			<h2 id="about-values">Nos valeurs</h2>
			<ul>
				<li><strong>Excellence</strong> : Tous les restaurants présents sur notre plateforme sont sélectionnés pour la qualité de leur cuisine et leur service irréprochable.</li>
				<li><strong>Simplicité</strong> : Grâce à une interface fluide et ergonomique, trouvez et réservez votre table en un instant.</li>
				<li><strong>Fiabilité</strong> : Chaque établissement est testé par notre équipe et bénéficie d’avis certifiés, pour une <strong>transparence totale</strong>.</li>
			</ul>
		</section>
		<section class="bloc-about-section" role="region" aria-labelledby="about-why">
			<h2 id="about-why">Pourquoi choisir OhMyFood ?</h2>
			<ul>
				<li>✨ <strong>Réservation immédiate</strong> : Plus besoin d’attendre, réservez en quelques secondes.</li>
				<li>🍽️ <strong>Une sélection triée sur le volet</strong> : Profitez d’un <strong>accès privilégié</strong> aux restaurants les plus convoités.</li>
				<li>🌟 <strong>Des recommandations personnalisées</strong> : Découvrez les tables qui correspondent à vos envies.</li>
			</ul>
		</section>

		<section class="bloc-about-section" role="region" aria-labelledby="about-call-to-action">
			<h2 id="about-call-to-action">Prêt à vivre une expérience gastronomique inoubliable ?</h2>
			<p>Rejoignez la communauté <strong>OhMyFood</strong> et laissez-vous guider vers les meilleures tables. <br>Réservez votre prochaine sortie <strong>dès maintenant</strong> et savourez l’instant.</p>
		</section>
	</div>

	<div class="back-zone" role="navigation" aria-label="Retour à l'accueil">
		<div class="back-home">
			<a class="btn" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Retourner à la page d'accueil du site OhMyFood">Retour à l'accueil</a>
		</div>
	</div>

</div><!-- .entry-content -->

<?php

get_footer();
