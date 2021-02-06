<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Accelerate Child Theme
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
</section><!-- #primary -->

<section class="featured-work">
	  <div class="site-content">
			 <h4>Featured Work</h4>

			 <ul class="homepage-featured-work">
			 <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				 <?php while ( have_posts() ) : the_post();
					 $image_1 = get_field("image_1");
					 $size = "medium";
					?>
					<li class="individual-featured-work">
					 <figure><a href="<?php the_permalink(); ?>">
						 <?php if($image_1){
							 echo wp_get_attachment_image($image_1,$size); }?></a>
					 </figure>
					 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				  </li>
				 <?php endwhile; //end of the loop ?>
			 <?php wp_reset_query(); //resets the altered query back to the original ?>
       </ul>
	  </div>
<section>

<section class="recent-posts">
  <div class="site-content">
		<div class="blog-post">
      <h4>From the Blog</h4>
			  <?php query_posts('posts_per_page=1'); ?>
          <?php while ( have_posts() ) : the_post(); ?>
	          <h3><?php the_title(); ?></h3>
	          <?php the_excerpt(); ?>
          <?php endwhile; //end of the loop ?>
        <?php wp_reset_query(); //resets the altered query back to the original ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
