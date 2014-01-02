<?php get_header(); ?>

    		<!--Begin Content-->
    		<div class="content">
            
            	<!--Begin Primary Content-->
            	<div class="homeSS">
                
                    <div class="redBg">
                    	<h1>404! Oops. Looks like you've found a hole in the universe where a web page ought to be. Never fear. Click on one of the projects below and we'll get into the time continuum. Easy.</h1>
                    </div>

				</div>
                <!--End Primary Content-->
                
                                <!--Begin Secondary Content-->
                <div class="ourWork">
           	  		
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
                <!--End Secondary Content-->
    
    		</div>
            <!--End Content-->

<?php get_footer(); ?>