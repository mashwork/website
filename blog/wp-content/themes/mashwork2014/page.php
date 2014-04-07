<?php
/**
 * @package WordPress
 * @subpackage Mashwork
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">

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

<!-- Start Loop -->


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

<!-- End Loop -->


	</div>

</div><!-- End Left Main --> 

 <!-- Sidebar --> 
<?php get_sidebar(); ?>


</div> 
        
       

	


<?php get_footer(); ?>