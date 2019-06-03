<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


 get_header(); ?>
   <section class="about-hero">
  	  <div class="home-page hero-content">
       <div class="about-hero-title">
  			     <?php while ( have_posts() ) : the_post(); ?>
  				        <?php the_content(); ?>
  			     <?php endwhile; // end of the loop. ?>
  		    </div><!-- .main-content -->
  	   </div><!-- #primary -->
   </section>

   <section class="site-content">
   		<div id="about-title">
           <?php the_title(); ?>
           <br/>
               <?php while ( have_posts() ) : the_post();
                 $overview = get_field('about_services_overview');?>

                 <div class="about-overview">
                   <p><?php echo $overview; ?></p>
                 </div>
                 <?php endwhile; // end of loop. ?>
   		       </div><!--  -->
    </section>

   <section>
      <div class="site-content">
   <ul class="about-services">
       <?php query_posts('posts_per_page=4&post_type=services'); ?>
           <?php while ( have_posts() ) : the_post();
             $service = get_field('service');
             $service_description = get_field('service_description');
             $image_1 = get_field('image_1');
             $size = "full";?>

         <li class="individual-about-service clearfix">
             <figure class="about-image">
                <?php echo wp_get_attachment_image($image_1, $size); ?>
             </figure>
             <div class="about-description">
               <h3><?php the_title(); ?></h3>
               <?php the_content(); ?>
             </div>
           </li>
           <?php endwhile; // end of loop. ?>
           <?php wp_reset_query(); ?>
         </ul>
       </div>
</section>

<section>
   <div class="site-content">
     <div id="colophon" class="site-footer clearfix" role="contentinfo">
       <div class='contact-button'>
         <h2>Interested in working with us?</h2>
           <a class="cbutton" href="<?php echo site_url('/contact/'); ?>">Contact Us</a>
       </div>
    </div>
 </div>
</section>

 <?php get_footer(); ?>
