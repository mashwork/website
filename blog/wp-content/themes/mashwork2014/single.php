<?php
/**
 * @package WordPress
 * @subpackage Mashwork
 */
?>
<?php
/**
 * @package WordPress
 * @subpackage Mashwork
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<?php get_header(); ?>

	<div id="content" class="span-24 last">
	<div id="TitleBox" class="span-24"><h1 class="pageTitle"><a href="http://www.mashwork.com/blog">Blog</a></h1></div>	
	<div id="titledivBox" class="span-24"></div><!-- divider -->
	
      

<!-- Start Row 1 -->
<div id="leftMain" class="span-16">
	
    <div class="span-16 last">

<!-- Start Loop -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation" style="margin-bottom:15px;">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>


			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<!-- End Loop -->


	</div>

</div><!-- End Left Main --> 


</div> 
        
       

	


<?php get_footer(); ?>