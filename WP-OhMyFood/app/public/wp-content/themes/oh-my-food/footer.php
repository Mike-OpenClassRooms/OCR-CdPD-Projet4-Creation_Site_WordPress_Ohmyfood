<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
</main><!-- #main : Fin de la zone principale de contenu -->
</div><!-- #primary : Fin de la zone principale (contenu) -->
</div><!-- #content : Fin du conteneur global du contenu -->

<!-- Newsletters -->
<section class="newsletter-box">
	<p class="newsletter-title">TITRE</p>
	<p class="newsletter-text">
		TEXTE
	</p>
	<!-- Appel via un short code a contact form 7, attention ça doit correspondre a votre newsletter -->
	<?php echo do_shortcode('[contact-form-7 id="8cccb11" title="Formulaire newsletters"]'); ?>
</section>
<?php
// Inclusion d'un template part pour les widgets du footer.
// Le fichier 'footer-widgets.php' situé dans le dossier template-parts/footer/
// contient le code qui affiche les zones de widgets du pied de page.
// ce contenu est modifiable dans l'administration de WordPress, dans Apparence > Widgets.
get_template_part('template-parts/footer/footer-widgets');
?>

<footer>

	<!------- Pop up jeu concours ------->
	<div id="popup-jeu-concours" class="popup hidden" role="dialog" aria-modal="true" aria-labelledby="popup-title">
		<div class="popup-content">
			<h2 id="popup-title">Participez à notre jeu concours !</h2>
			<p>Offre exceptionnelle : gagnez deux places pour un déjeuner dans un de nos restaurants gastronomiques ! Résultat immédiat dans votre boîte mail.</p>
			<p><strong>Attention :</strong> cette offre est limitée, vous ne pouvez jouer qu’une fois.</p>

			<form id="popup-form">
				<label for="popup-email" class="sr-only">Votre adresse e-mail</label>
				<input type="email" id="popup-email" name="email" placeholder="Votre e-mail" required>
				<button type="submit">Je participe</button>
			</form>

			<button id="popup-close" aria-label="Fermer la fenêtre">&times;</button>
		</div>
	</div>


	<div class="infos-footer">
		<section class="social-follow" aria-label="Suivez-nous sur les réseaux sociaux">
			<div class="social-icons">
				<a href="#" class="social-icon" aria-label="Instagram">
					<i class="fa-brands fa-instagram"></i>
				</a>
				<a href="#" class="social-icon" aria-label="Threads">
					<i class="fa-brands fa-threads"></i>
				</a>
				<a href="#" class="social-icon" aria-label="Facebook">
					<i class="fa-brands fa-facebook"></i>
				</a>
				<a href="#" class="social-icon" aria-label="Bluesky">
					<i class="fa-brands fa-bluesky"></i>
				</a>
				<a href="#" class="social-icon" aria-label="TikTok">
					<i class="fa-brands fa-tiktok"></i>
				</a>
				<a href="#" class="social-icon" aria-label="LinkedIn">
					<i class="fa-brands fa-linkedin-in"></i>
				</a>
			</div>
		</section>

		<div class="footer-divider"></div>

		<section class="copyright">
			<p class="copyright-text"><span class="copyright-name">© 2025 OhMyFood</span>
				<span class="copyright-dot">•</span>
				<span class="copyright-links"><a href="/confidentialite">Confidentialité</a> • <a href="/conditions-generales">Conditions générales</a> • <a href="/sitemaps">Plan du site</a> • <a href="/faq">FAQ</a> • <a href="/contact">Contact</a> • <a href="/a-propos">À propos de nous</a></span>
			</p>
		</section>
	</div>
</footer>

</footer>

<?php if (is_page_template('page-restaurant.php')) : ?>
	<nav class="booking-bar-mobile" aria-label="Réservation mobile">
		<p>Menu à partir <br>de 25€</p>
		<button class="btn-book">Réserver</button>
	</nav>
<?php else : ?>
	<nav class="tab-bar">

	</nav>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>

</div><!-- #page : Fin du conteneur principal de la page -->

<?php
// Permet à WordPress et aux plugins d'insérer du code avant la fermeture de la balise </body> (scripts, etc.)
wp_footer();
?>

</body>

</html>