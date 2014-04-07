<?php
/**
 * @package WordPress
 * @subpackage Mashwork2014
 */
/*
Template Name: Archives
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

<?php get_search_form(); ?>

<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>


<!-- End Loop -->


	</div>

</div><!-- End Left Main --> 

 <!-- Sidebar --> 
<?php get_sidebar(); ?>


</div> 
        
       

	


<?php get_footer(); ?>