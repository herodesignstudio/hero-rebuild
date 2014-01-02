<?php
/*
Template Name: Our Work
*/
?>

<?php get_header(); ?>

    		<!--Begin Content-->
    		<div class="content">
            
            	<!--Begin Primary Content-->
            	<div class="contentDesc">
                
					<h1>Our design is about more than how good it looks, it's about how well it works.</h1>
                    
				</div>
                <!--End Primary Content-->
            
                <!--Begin Secondary Content-->
                <div class="ourWork">
           	  		
                    <div class="ourWorkNavs">
                        <div class="ourWorkNav">
                            <span>Sort by project type:</span>
                                <div>
                                    <ul id="nav">
                                        <li><em class="menuSelect">Featured</em>
                                            <ul class="menuUl">
                                            	<!--<li><a href="#" class="designSelect">Design</a></li>-->
                                                <li><a href="#" class="Printselect">Print</a></li>
                                                <li><a href="#" class="Designselect">Design</a></li>
                                                <li><a href="#" class="Interactiveselect">Interactive</a></li>
                                                <li><a href="#" class="Environmentalselect">Environmental</a></li>
                                                <li><a href="#" class="Productionselect">Production</a></li>
                                                <!--<li><a href="#" class="Allselect">All</a></li>-->
                                                <li><a href="#" class="Featuredselect">Featured</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="pgId">
                            Our Work / <strong>Featured</strong>
						</div>
                    </div>
                    
<?php $my_query = new WP_Query('category_name=featured');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Featured">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>

<?php $my_query = new WP_Query('category_name=print');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Print" style="display:none;">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>
  
  <?php $my_query = new WP_Query('category_name=interactive');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Interactive" style="display:none;">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>
  
    <?php $my_query = new WP_Query('category_name=environmental');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Environmental" style="display:none;">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>
  
<?php $my_query = new WP_Query('category_name=production');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Production" style="display:none;">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>
  
  <?php $my_query = new WP_Query('category_name=design');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>
					
                    <div class="projectThumb Design" style="display:none;">
                    	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink() ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="280" height="160" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <p><?php the_excerpt_rss(); ?> | <a href="<?php the_permalink() ?>">more&hellip;</a></p>
                        <ul>
							<?php
                                $parentscategory ="";
                                    foreach((get_the_category()) as $category) {
                                        if ($category->category_parent == 0) {
                                        $parentscategory .= '<li><a href="#" title="' . $category->name . '" class="' . $category->name .  'select">' . $category->name . '</a></li> ';
                                        }
                                    }
                                echo substr($parentscategory,0,-2);
                            ?>
                        </ul>
                    </div>
                    
  <?php endwhile; ?>
                                              
                
                </div>
                <!--End Secondary Content-->
        
    
    		</div>
            <!--End Content-->
<script type="text/javascript">
								$(".Featuredselect").click(function () {
								  $(".Featured").fadeIn(300);
								  $(".Design, .Print, .Interactive, .Environmental, .Production").hide(0);
								  $(".pgId strong, .menuSelect").html("Featured");
								  return false;
								});
								$(".Designselect").click(function () {
								  $(".Design").fadeIn(300);
								  $(".Featured, .Print, .Interactive, .Environmental, .Production").hide(0);
								  $(".pgId strong, .menuSelect").html("Design");
								  return false;
								}); 
								$(".Printselect").click(function () {
								  $(".Print").fadeIn(300);
								  $(".Design, .Featured, .Interactive, .Environmental, .Production").hide(0);
								  $(".pgId strong, .menuSelect").html("Print");
								  return false;
								});
								$(".Interactiveselect").click(function () {
								  $(".Interactive").fadeIn(300);
								  $(".Design, .Print, .Featured, .Environmental, .Production").hide(0);
								  $(".pgId strong, .menuSelect").html("Interactive");
								  return false;
								});
								$(".Environmentalselect").click(function () {
								  $(".Environmental").fadeIn(300);
								  $(".Design, .Print, .Interactive, .Featured, .Production").hide(0);
								  $(".pgId strong, .menuSelect").html("Environmental");
								  return false;
								});
								$(".Productionselect").click(function () {
								  $(".Production").fadeIn(300);
								  $(".Design, .Print, .Interactive, .Environmental, .Featured").hide(0);
								  $(".pgId strong, .menuSelect").html("Production");
								  return false;
								});
								$(".Allselect").click(function () {
								  $(".projectThumb").fadeIn(300);
								  $(".pgId strong, .menuSelect").html("All");
								  return false;
								});
						  </script>
<?php get_footer(); ?>