<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pet_Store
 */
$street_address = get_theme_mod('footer_street_address_textfield');
$city_state_address = get_theme_mod('footer_city_state_address_textfield');
$email = get_theme_mod('footer_email_textfield');
$phone = get_theme_mod('footer_phone_textfield');

$twitter_url = get_theme_mod('footer_twitter_url');
$facebook_url = get_theme_mod('footer_facebook_url');
$linkedin_url = get_theme_mod('footer_linkedin_url');
$instagram_url = get_theme_mod('footer_instagram_url');
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info d-flex flex-row justify-content-center align-items-center">
			<!-- Logo -->
			<div class="footer-right-border col-12 col-lg-3">
				<?php the_custom_logo(); ?>
			</div>
			<!-- Contact Info -->
			<?php if ($street_address || $city_state_address || $email || $phone): ?>
				<div class="col-12 col-lg-5 d-flex flex-column justify-content-center align-items-center">
					<?php if ($street_address && $city_state_address): ?>
						<a target="_blank" href="http://maps.google.com/?q=<?= $street_address; ?> <?= $city_state_address; ?>">
							<p><?= $street_address; ?></p>
							<p><?= $city_state_address; ?></p>
						</a>
					<?php endif;
					if ($email): ?>
						<a target="_blank" href="mailto:<?= $email; ?>">
							<p><?= $email; ?></p>
						</a>
					<?php endif;
					if ($phone): ?>
						<a target="_blank" href="tel:<?= $phone; ?>">
							<p><?= $phone; ?></p>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<!-- Social Media -->
			<div class="footer-left-border col-12 col-lg-4">
				
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
