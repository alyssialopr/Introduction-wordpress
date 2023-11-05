<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PingPong
 */

$dataCaracteristique = get_fields();
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post();

		get_template_part('template-parts/content', get_post_type());


		// If comments are open or we have at least one comment, load up the comment template.
		// if (comments_open() || get_comments_number()):
			// comments_template();
		// endif; ?>
		<section>
			<h1>
				Informations supplémentaires
			</h1>
			<div class="caract">
				<p>Rapidité</p>
				<?= $dataCaracteristique['rapidite'] ?>

				<p>Contrôle</p>
				<?= $dataCaracteristique['controle'] ?>

				<p>Adhérence</p>
				<?= $dataCaracteristique['adherence'] ?>

				<p>Epaisseur</p>
				<?= $dataCaracteristique['epaisseur'] ?>
			</div>

		</section>

		<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
