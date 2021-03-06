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
            <span><?php the_time('F j, Y') ?>  by <?php the_author_posts_link() ?> about <?php the_category(', ') ?></span>
          </div>

          <div class="share-links-wrap">
            <ul class="share-links-list">
              <li class="twitter-share-link">
                <a rel="nofollow" target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink() ?>&via=mashwork" title="Share to Twitter"></a>
              </li>
              <li class="facebook-share-link">
                <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" title="Share to Facebook"></a>
              </li>
              <li class="linkedin-share-link">
                <a rel="nofollow" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php get_the_excerpt(); ?>&source=<?php get_home_url(); ?>" title="Share to LinkedIn"></a>
              </li>
            </ul>
          </div>

          <div class="entry">
            <?php the_content(); ?>
          </div>

          <div class="tags-wrap">
            <h4>Tags</h4>
            <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
          </div>
        </div>

        <div class="post-navigation">
          <div class="previous-post-btn"><?php previous_post_link('%link', 'Previous Post') ?></div>
          <div class="next-post-btn"><?php next_post_link('%link', 'Next Post') ?></div>
        </div>

        <div class="comments-wrap">
          <?php comments_template(); ?>
        </div>

      <?php endwhile; else: ?>

        <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>

    </div>

  </div>

</div>

<?php get_footer(); ?>