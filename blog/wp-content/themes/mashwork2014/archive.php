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
	
			<?php if (have_posts()) : ?>
			<div class="archive-header-wrap">
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h3 class="archive-title"><span class="header-callout"><?php single_cat_title(); ?></span> Category Posts</h3>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3 class="archive-title">Posts Tagged <span class="header-callout"><?php single_tag_title(); ?></span></h3>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3 class="archive-title">Archive for <?php the_time('F jS, Y'); ?></h3>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3 class="archive-title">Archive for <?php the_time('F, Y'); ?></h3>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3 class="archive-title">Archive for <?php the_time('Y'); ?></h3>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3 class="archive-title"><span class="header-callout"><?php echo get_the_author() ; ?></span> Author Archive</h3>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3 class="archive-title">Blog Archives</h3>
				<?php } ?>
			</div>

			<div class="post-list">

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
								<span><?php the_time('F jS, Y') ?> by <?php the_author() ?> about <?php the_category(', ') ?></span>
							</div>
							<div class="entry">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn-gold read-more-btn" title="Read more">Read more</a>
						</div>
					</div>
				</div>

				<?php endwhile; ?>

			<div class="post-list-pages">
			<?php wp_pagenavi(); ?>
			</div>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

</div>
</div> 
</div>  
</div> 

<?php get_footer(); ?>