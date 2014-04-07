<?php
/**
 * @package WordPress
 * @subpackage Mashwork
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js", lang="en"> <!--<![endif]-->

<head>

<title>Blog - Mashwork</title>

<?php get_header(); ?>

<div class="container">

	<div class="row">
	
		<div class="main-content col-xs-12">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class() ?> >
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					<div class="post-details">
						<span><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </span>
					</div>
					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
				</div>

			<?php endwhile; ?>

			<?php wp_pagenavi(); ?>


			<?php else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

		<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>