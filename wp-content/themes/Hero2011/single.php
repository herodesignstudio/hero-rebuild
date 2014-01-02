<?php get_header(); ?>
<!--Begin Content-->
    		<div class="content">
			
            <div class="projectHeader">
            	<h1>
				
					<?php if ( get_post_meta($post->ID, 'page-title', true ) ) { ?> <?php echo get_post_meta($post->ID, "page-title", $single = true); ?> <?php } else { ?> <?php the_title(); ?> <?php } ?>

                </h1>
				
				<?php if ( get_post_meta($post->ID, 'website-url', true ) ) { ?>
                    
                   <a href="<?php echo get_post_meta($post->ID, "website-url", $single = true); ?>" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('visitWeb','','<?php bloginfo('stylesheet_directory'); ?>/images/viewWeb-roll.gif',1)"><img style="float:right; margin-top:22px;" width="129" height="9"  src="<?php bloginfo('stylesheet_directory'); ?>/images/viewWeb.gif" alt="Vist this website..." name="visitWeb" border="0" id="visitWeb" title="Visit This Website..." alt="Visit This Website..." /></a>
                    
                <?php } ?>	
                	
            </div>

            <div class="project">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>	
                
	<?php the_content(); ?>
    
           	</div>
            <div class="projectMore">
            	<h2>Project Filed Under:</h2>
                <ul class="moreCats">
                     <?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                <!--Test -->
                </ul>
                <a href="/wp/our-work" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('moreWork','','<?php bloginfo('stylesheet_directory'); ?>/images/more-work-roll.gif',1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/more-work.gif" alt="View More Work" title="View More Work" name="moreWork" class="moreWork" width="118" height="22" border="0" id="moreWork" /></a>
            </div>    
                
<?php endwhile; ?>
<?php else : ?>
                
<h1>Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
                
<?php endif; ?>

            
            <div class="ourWork projectMoreThumbs">
            
<?php query_posts('category_name=featured&showposts=6&orderby=rand'); ?>
<?php while (have_posts()) : the_post(); ?>
                            <div class="projectThumb <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
                            <?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
<?php endwhile;?>
      
            </div>
            
<?php get_footer(); ?>