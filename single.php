<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

  <div class="main-content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="latest-posts">
        <article class="post post-single">
          <div class="post-info">
            <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
          </div><!-- end of .post-info -->
          <span class="post-author"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></span>
          <?php the_content(); ?>
          <div class="comment-section">
            <?php comments_template( '', true ); ?>
          </div><!-- end of .comment-section -->
        </article>
    </section><!-- end of .latest-posts -->
    <?php endwhile; ?>
    <br>
    <a href="/">Back to Main Page</a>
  </div><!-- end of .main-content -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>


