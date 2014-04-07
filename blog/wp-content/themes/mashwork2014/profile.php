<?php if((get_post_meta($post->ID, 'author', true))) { ?>
	<div class="profile">
		<div class="profileText">
			<?php the_author_meta('description'); ?>
		</div> <!-- END .profileText -->
		<div class="profileStats">
			<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); }?>
			<div class="profileName">
				<?php the_author_posts_link(); ?> 
			</div> <!-- END .profileName -->
			<div class="profileJob">
				<a href="<?php the_author_meta('user_url'); ?>" title="<?php the_author_meta('first_name'); ?>'s website"><?php the_author_meta('first_name'); ?>'s website</a><br />
									Follow <?php the_author_meta('first_name'); ?> on <a href="http://www.twitter.com/<?php the_author_meta('aim'); ?>" title="Twitter name: <?php the_author_meta('aim'); ?>">Twitter</a>
			</div> <!-- END .profileJob -->
		</div> <!-- END .profileStats -->
	</div> <!-- END .profile -->
<?php } ?>