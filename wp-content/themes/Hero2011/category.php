<?php get_header(); ?>
<!--Begin Content-->
    		<div class="content">
				<div class="categoryHeader">
                    <h1><?php single_cat_title(); ?></h1>
                    <a href="/wp/our-work" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('moreWork','','<?php bloginfo('stylesheet_directory'); ?>/images/more-work-roll.gif',1)"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/more-work.gif" alt="View More Work" title="View More Work" name="moreWork" class="moreWork" width="118" height="22" border="0" id="moreWork" /></a>
                </div>
            
          <!--Begin Secondary Content-->
                <div class="ourWork projectPg">          	  		
                            
<?php if (have_posts()) : ?>
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
<?php else : ?>
<?php endif; ?>                            
                
                </div>
                <!--End Secondary Content-->
        
    
    		</div>
            <!--End Content-->
<?php get_footer(); ?>