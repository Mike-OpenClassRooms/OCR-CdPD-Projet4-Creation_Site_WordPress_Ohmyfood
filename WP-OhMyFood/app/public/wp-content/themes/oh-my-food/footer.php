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

<?php
// Inclusion d'un template part pour les widgets du footer.
// Le fichier 'footer-widgets.php' situé dans le dossier template-parts/footer/
// contient le code qui affiche les zones de widgets du pied de page.
// ce contenu est modifiable dans l'administration de WordPress, dans Apparence > Widgets.
get_template_part('template-parts/footer/footer-widgets');
?>

<footer role="contentinfo" aria-label="Pied de page">

	<!------- Pop up jeu concours ------->
	<div id="popup-jeu-concours" class="popup hidden" role="dialog" aria-modal="true" aria-labelledby="popup-title">
		<div class="popup-content">
			<h2 id="popup-title">Participez à notre jeu concours !</h2>
			<svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512" aria-hidden="true" focusable="false"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
				<path d="M190.5 68.8L225.3 128l-1.3 0-72 0c-22.1 0-40-17.9-40-40s17.9-40 40-40l2.2 0c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40L32 128c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l448 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-41.6 0c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88l-2.2 0c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0L152 0C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40l-72 0-1.3 0 34.8-59.2C329.1 55.9 342.9 48 357.8 48l2.2 0c22.1 0 40 17.9 40 40zM32 288l0 176c0 26.5 21.5 48 48 48l144 0 0-224L32 288zM288 512l144 0c26.5 0 48-21.5 48-48l0-176-192 0 0 224z" />
			</svg>
			<p>Offre exceptionnelle : gagnez deux places pour un déjeuner dans un de nos restaurants gastronomiques ! Résultat immédiat dans votre boîte mail.</p>
			<p class="pop-up-conditions"><strong>Attention :</strong> cette offre est limitée, vous ne pouvez jouer qu’une fois.</p>

			<?php echo do_shortcode('[contact-form-7 id="8cccb11" title="Formulaire pop-up"]'); ?>

			<button id="popup-close" aria-label="Fermer la fenêtre">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 19 19" fill="none" aria-hidden="true" focusable="false">
					<mask id="mask0_1806_3867" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
						<rect x="0.836914" y="0.200195" width="18" height="18" fill="#0D1B2A" />
					</mask>
					<g mask="url(#mask0_1806_3867)">
						<path d="M7.13691 12.9502L9.83691 10.2502L12.5369 12.9502L13.5869 11.9002L10.8869 9.2002L13.5869 6.5002L12.5369 5.4502L9.83691 8.1502L7.13691 5.4502L6.08691 6.5002L8.78691 9.2002L6.08691 11.9002L7.13691 12.9502ZM9.83691 16.7002C8.79941 16.7002 7.82441 16.5033 6.91191 16.1096C5.99941 15.7158 5.20566 15.1814 4.53066 14.5064C3.85566 13.8314 3.32129 13.0377 2.92754 12.1252C2.53379 11.2127 2.33691 10.2377 2.33691 9.2002C2.33691 8.1627 2.53379 7.1877 2.92754 6.2752C3.32129 5.3627 3.85566 4.56895 4.53066 3.89395C5.20566 3.21895 5.99941 2.68457 6.91191 2.29082C7.82441 1.89707 8.79941 1.7002 9.83691 1.7002C10.8744 1.7002 11.8494 1.89707 12.7619 2.29082C13.6744 2.68457 14.4682 3.21895 15.1432 3.89395C15.8182 4.56895 16.3525 5.3627 16.7463 6.2752C17.14 7.1877 17.3369 8.1627 17.3369 9.2002C17.3369 10.2377 17.14 11.2127 16.7463 12.1252C16.3525 13.0377 15.8182 13.8314 15.1432 14.5064C14.4682 15.1814 13.6744 15.7158 12.7619 16.1096C11.8494 16.5033 10.8744 16.7002 9.83691 16.7002Z" fill="#0D1B2A" />
					</g>
				</svg>
			</button>
		</div>
	</div>


	<div class="infos-footer">
		<section class="social-follow" aria-label="Suivez-nous sur les réseaux sociaux">
			<div class="social-icons">
				<a href="#" class="social-icon">
					<i class="fa-brands fa-instagram" aria-hidden="true"></i>
					<span class="sr-only">Instagram</span>
				</a>
				<a href="#" class="social-icon">
					<i class="fa-brands fa-threads" aria-hidden="true"></i>
					<span class="sr-only">Threads</span>
				</a>
				<a href="#" class="social-icon">
					<i class="fa-brands fa-facebook" aria-hidden="true"></i>
					<span class="sr-only">Facebook</span>
				</a>
				<a href="#" class="social-icon">
					<i class="fa-brands fa-bluesky" aria-hidden="true"></i>
					<span class="sr-only">Bluesky</span>
				</a>
				<a href="#" class="social-icon">
					<i class="fa-brands fa-tiktok" aria-hidden="true"></i>
					<span class="sr-only">TikTok</span>
				</a>
				<a href="#" class="social-icon">
					<i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
					<span class="sr-only">LinkedIn</span>
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

<?php if (is_page_template('page-restaurant.php')) : ?>
	<nav class="booking-bar-mobile" aria-label="Réservation mobile" role="navigation">
		<p>Menu à partir <br>de 25€</p>
		<button class="btn-book">Réserver</button>
	</nav>
<?php else : ?>
	<nav class="tab-bar" role="navigation">
		<div class="tab-bar-content">
			<div class="svg-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" aria-hidden="true" focusable="false">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M16.6156 16.1628C17.9119 14.7126 18.6999 12.7984 18.6999 10.7002C18.6999 6.17151 15.0287 2.50024 10.4999 2.50024C5.97119 2.50024 2.29993 6.17151 2.29993 10.7002C2.29993 15.229 5.97119 18.9002 10.4999 18.9002C12.5227 18.9002 14.3745 18.1678 15.8044 16.9537C15.8332 17.0155 15.8731 17.0735 15.9242 17.1245L21.0757 22.276C21.31 22.5103 21.6899 22.5103 21.9242 22.276C22.1585 22.0417 22.1585 21.6618 21.9242 21.4275L16.7727 16.276C16.7255 16.2287 16.6723 16.191 16.6156 16.1628ZM17.4999 10.7002C17.4999 14.5662 14.3659 17.7002 10.4999 17.7002C6.63393 17.7002 3.49993 14.5662 3.49993 10.7002C3.49993 6.83425 6.63393 3.70024 10.4999 3.70024C14.3659 3.70024 17.4999 6.83425 17.4999 10.7002Z" fill="#0D1B2A" />
				</svg>
			</div>
			<p>Explorer</p>
		</div>

		<div class="tab-bar-content">
			<div class="svg-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none" aria-hidden="true" focusable="false">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8996 20.1444L12.291 19.7863C7.99277 17.2567 5.53767 14.7399 4.31979 12.5219C3.02185 10.1582 3.12497 8.14071 3.86262 6.69354C5.38237 3.712 9.68016 2.8061 12.272 6.08419L12.8995 6.87783L13.5271 6.08423C16.1194 2.80601 20.4174 3.71209 21.9371 6.69354C22.6748 8.14069 22.7778 10.1582 21.4798 12.5219C20.2618 14.7399 17.8066 17.2567 13.5082 19.7863L12.8996 20.1444ZM12.8995 8.81255L11.3307 6.82846C9.31299 4.27652 6.07769 4.9903 4.93174 7.23849C4.39783 8.28596 4.23882 9.8813 5.37165 11.9444C6.45141 13.9108 8.715 16.2894 12.8996 18.7521C17.0844 16.2894 19.3481 13.9108 20.428 11.9443C21.5609 9.88124 21.4019 8.28592 20.868 7.23849C19.7221 4.99042 16.4865 4.27636 14.4683 6.82856L12.8995 8.81255Z" fill="#0D1B2A" />
				</svg>
			</div>
			<p>Favoris</p>
		</div>

		<div class="tab-bar-content">
			<div class="svg-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none" aria-hidden="true" focusable="false">
					<path d="M6.75 2C7.26953 2 7.6875 2.41797 7.6875 2.9375V4.5H13.3125V2.9375C13.3125 2.41797 13.7305 2 14.25 2C14.7695 2 15.1875 2.41797 15.1875 2.9375V4.5H16.75C18.1289 4.5 19.25 5.62109 19.25 7V7.625V9.5V19.5C19.25 20.8789 18.1289 22 16.75 22H4.25C2.87109 22 1.75 20.8789 1.75 19.5V9.5V7.625V7C1.75 5.62109 2.87109 4.5 4.25 4.5H5.8125V2.9375C5.8125 2.41797 6.23047 2 6.75 2ZM17.375 9.5H3.625V19.5C3.625 19.8438 3.90625 20.125 4.25 20.125H16.75C17.0938 20.125 17.375 19.8438 17.375 19.5V9.5ZM14.6016 13.6016L10.2266 17.9766C9.85938 18.3437 9.26563 18.3437 8.90234 17.9766L6.40234 15.4766C6.03516 15.1094 6.03516 14.5156 6.40234 14.1523C6.76953 13.7891 7.36328 13.7852 7.72656 14.1523L9.5625 15.9883L13.2734 12.2773C13.6406 11.9102 14.2344 11.9102 14.5977 12.2773C14.9609 12.6445 14.9648 13.2383 14.5977 13.6016H14.6016Z" fill="#0D1B2A" />
				</svg>
			</div>
			<p>Réservations</p>
		</div>

		<div class="tab-bar-content">
			<div class="svg-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="19" height="24" viewBox="0 0 19 24" fill="none" aria-hidden="true" focusable="false">
					<path d="M13.1093 11.7227C13.6718 10.918 13.9999 9.9375 13.9999 8.875C13.9999 6.11328 11.7616 3.875 8.99988 3.875C6.23816 3.875 3.99988 6.11328 3.99988 8.875C3.99988 9.9375 4.328 10.918 4.8905 11.7227C5.03503 11.9297 5.20691 12.1641 5.3905 12.4141C5.89441 13.1055 6.49597 13.9336 6.94519 14.75C7.35144 15.4922 7.55847 16.2656 7.66003 16.9961L5.75769 17C5.67175 16.5312 5.52722 16.0742 5.29675 15.6523C4.91003 14.9492 4.42957 14.2891 3.9491 13.6289C3.74597 13.3516 3.54285 13.0742 3.34753 12.793C2.578 11.6836 2.12488 10.332 2.12488 8.875C2.12488 5.07813 5.203 2 8.99988 2C12.7968 2 15.8749 5.07813 15.8749 8.875C15.8749 10.332 15.4218 11.6836 14.6483 12.793C14.453 13.0742 14.2499 13.3516 14.0468 13.6289C13.5663 14.2852 13.0858 14.9453 12.6991 15.6523C12.4686 16.0742 12.3241 16.5312 12.2382 17H10.3397C10.4413 16.2695 10.6483 15.4922 11.0546 14.7539C11.5038 13.9375 12.1053 13.1094 12.6093 12.418C12.7928 12.168 12.9608 11.9336 13.1053 11.7266L13.1093 11.7227ZM8.99988 7C7.96472 7 7.12488 7.83984 7.12488 8.875C7.12488 9.21875 6.84363 9.5 6.49988 9.5C6.15613 9.5 5.87488 9.21875 5.87488 8.875C5.87488 7.14844 7.27332 5.75 8.99988 5.75C9.34363 5.75 9.62488 6.03125 9.62488 6.375C9.62488 6.71875 9.34363 7 8.99988 7ZM8.99988 22C7.27332 22 5.87488 20.6016 5.87488 18.875V18.25H12.1249V18.875C12.1249 20.6016 10.7264 22 8.99988 22Z" fill="#0D1B2A" />
				</svg>
			</div>
			<p>Inspirations</p>
		</div>

		<div class="tab-bar-content">
			<div class="svg-content">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none" aria-hidden="true" focusable="false">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M3.59966 12.1C3.59966 7.18467 7.58432 3.2 12.4997 3.2C17.415 3.2 21.3997 7.18467 21.3997 12.1C21.3997 13.9277 20.8487 15.6268 19.9038 17.0402C18.2826 15.7137 16.2989 14.8138 14.1239 14.5117C15.9193 13.8506 17.1998 12.1248 17.1998 10.0999C17.1998 7.50416 15.0955 5.3999 12.4998 5.3999C9.90407 5.3999 7.7998 7.50416 7.7998 10.0999C7.7998 12.1248 9.08028 13.8506 10.8757 14.5117C8.70062 14.8138 6.71682 15.7138 5.09561 17.0403C4.15065 15.6269 3.59966 13.9278 3.59966 12.1ZM5.82848 17.9913C7.45919 19.8365 9.84354 21 12.4997 21C15.1558 21 17.5403 19.8364 19.171 17.9911C17.3571 16.4971 15.0332 15.5999 12.4998 15.5999C9.96631 15.5999 7.64238 16.4972 5.82848 17.9913ZM12.4997 2C6.92158 2 2.39966 6.52192 2.39966 12.1C2.39966 17.6781 6.92158 22.2 12.4997 22.2C18.0777 22.2 22.5997 17.6781 22.5997 12.1C22.5997 6.52192 18.0777 2 12.4997 2ZM15.9998 10.1001C15.9998 12.0331 14.4328 13.6001 12.4998 13.6001C10.5668 13.6001 8.99976 12.0331 8.99976 10.1001C8.99976 8.1671 10.5668 6.6001 12.4998 6.6001C14.4328 6.6001 15.9998 8.1671 15.9998 10.1001Z" fill="#0D1B2A" />
				</svg>
			</div>
			<p>Profil</p>
		</div>

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