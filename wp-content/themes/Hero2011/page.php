<?php get_header(); ?>

    		<!--Begin Content-->
    		<div class="content">
            
            	<!--Begin Primary Content-->
            	<div class="homeSS">
                
                    	<h1><?php the_title();?></h1>

				</div>
                <!--End Primary Content-->
                
                                <!--Begin Secondary Content-->
                <div class="ourWork" id="page-content">
           	  		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                
	<?php the_content(); ?>
    
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

                    
                </div>
                <!--End Secondary Content-->
    
    		</div>
            <!--End Content-->

<?php get_footer(); ?>