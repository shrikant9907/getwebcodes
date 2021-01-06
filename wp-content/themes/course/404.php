<?php
/**
 * The template for displaying the 404 template in the My Course theme.
 *
 * @package WordPress
 * @subpackage My_Course
 * @since My Course 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'mycourse' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'mycourse' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'mycourse' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
