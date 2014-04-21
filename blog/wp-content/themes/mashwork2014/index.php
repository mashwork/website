<?php
/**
 * @package WordPress
 * @subpackage Mashwork2014
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js", lang="en"> <!--<![endif]-->

<head>

<title>MashWords – The Mashwork & Canvs Blog</title>

<?php get_header(); ?>

<div class="container">

	<div class="row">
	
		<div class="blog-content">

			<div class="post-list">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class() ?> >
						<div class="row">
							<div class="post-media">
							<?php if ( has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" class="thumbnail-link" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('thumbnail'); ?>
							</a>
							<?php endif; ?>
							</div>
							<div class="post-listing">
								<h2 class="post-title">
									<a href="<?php the_permalink() ?>" class="post-title-link" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="post-details">
									<span><?php the_time('F j, Y') ?> by <?php the_author_posts_link() ?> about <?php the_category(', ') ?></span>
								</div>
								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="btn-gold read-more-btn" title="Read more">Read more</a>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
			<div class="post-list-pages">
				<?php wp_pagenavi(); ?>
			</div>
			<?php endif; ?>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>