<?php
/**
 * @package WordPress
 * @subpackage Mashwork2014
 */
?>

<title><?php wp_title(''); ?></title>

<?php get_header(); ?>

<div class="container">

	<div class="row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="single-post-content">

			<div <?php post_class("single-post") ?> id="post-<?php the_ID(); ?>">
				<h1 class="post-title"><?php the_title(); ?></h1>

				<div class="post-details">
					<span><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </span>
				</div>

				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="post-navigation">
				<div class="previous-post-btn"><?php previous_post_link('%link', 'Previous Post') ?></div>
				<div class="next-post-btn"><?php next_post_link('%link', 'Next Post') ?></div>
			</div>
	
		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	</div>

</div>

</div> 
        
      
<?php get_footer(); ?>