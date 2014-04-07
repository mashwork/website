<?php
/**
 * @package WordPress
 * @subpackage Mashwork
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="" />

<title> Blog - Mashwork</title>

<?php get_header(); ?>

	<div id="content" class="span-24 last">
	<div id="TitleBox" class="span-24"><h1 class="pageTitle">Blog</h1></div>	
	<div id="titledivBox" class="span-24"></div><!-- divider -->
	
      

<!-- Start Row 1 -->
<div id="leftMain" class="span-16">
<div class="span-16 last">
<p><strong>Welcome to the Mashwork Blog</strong>
Here you’ll find stats that blow our mind and our humble opinion on things we think are interesting in social media, entertainment and research.</p><hr>

<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a style="color:#000;" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

		</div>

				<p class="postmetadata" style="font-size:11px;"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
<hr>

		<?php endwhile; ?>

	<?php wp_pagenavi(); ?>

		<div class="navigation">

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>


</div>
</div>	



</div> <!-- End Left Main --> 
        
        <!-- Sidebar --> 

	
        <!-- End Right Main -->

<?php get_footer(); ?>