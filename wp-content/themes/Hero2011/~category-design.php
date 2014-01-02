<?php get_header(); ?>
<!--Begin Content-->
    		<div class="content">
				<div class="categoryHeader">
                    <h1><?php single_cat_title(); ?></h1>
                    <div class="ourWorkNav catPg">
                            <span></span>
                                <div style="margin-left:140px;">
                                    <ul id="nav">
                                        <li><em class="menuSelect">All</em>
                                            <ul>
                                                <li><a href="#" class="logosSelect">Logos</a></li>
                                                <li><a href="#" class="postersSelect">Posters</a></li>
                                                <li><a href="#" class="directmailSelect">Direct Mail</a></li>
                                                <li><a href="#" class="brochuresSelect">Brochures</a></li>
                                                <li><a href="#" class="catalogsSelect">Catalogs</a></li>
                                                <li><a href="#" class="allSelect">All</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
					</div>
                </div>
                          
          <!--Begin Secondary Content-->
                <div class="ourWork projectPg">          	  		
                            
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="projectThumb <?php foreach((get_the_category()) as $childcat) { if (cat_is_ancestor_of(4, $childcat)) { echo $childcat->cat_name; }} ?>">
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
						<script type="text/javascript">
								$(".logosSelect").click(function () {
								  $(".Logos").fadeIn(300);
								  $(".Poster, .Direct-Mail, .Brochures, .Catalogs").hide(0);
								  $(".pgId strong, .menuSelect").html("Logos");
								  return false;
								});
								$(".posterSelect").click(function () {
								  $(".Poster").fadeIn(300);
								  $(".Logos, .Direct-Mail, .Brochures, .Catalogs").hide(0);
								  $(".pgId strong, .menuSelect").html("Posters");
								  return false;
								}); 
								$(".direct-MailSelect").click(function () {
								  $(".Direct-Mail").fadeIn(300);
								  $(".Logos, .Poster, .Brochures, .Catalogs").hide(0);
								  $(".pgId strong, .menuSelect").html("Direct Mail");
								  return false;
								});
								$(".brochuresSelect").click(function () {
								  $(".Brochures").fadeIn(300);
								  $(".Logos, .Poster, .Direct-Mail, .Catalogs").hide(0);
								  $(".pgId strong, .menuSelect").html("Brochures");
								  return false;
								});
								$(".catalogsSelect").click(function () {
								  $(".Catalogs").fadeIn(300);
								  $(".Logos, .Poster, .Direct-Mail, .Brochures").hide(0);
								  $(".pgId strong, .menuSelect").html("Catalogs");
								  return false;
								});
								$(".allSelect").click(function () {
								  $(".projectThumb").fadeIn(300);
								  $(".pgId strong, .menuSelect").html("All");
								  return false;
								});
						</script>

<?php get_footer(); ?>