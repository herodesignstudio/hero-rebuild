<?php get_header(); ?>

    		<!--Begin Content-->
    		<div class="content">
            
            	<!--Begin Primary Content-->
            	<div class="homeSS">
                
                    <div class="redBg">
                    	<h1>[Auto Deployment in Testing] Hero is a digitally driven design studio &amp; marketing agency. We pair smart design with marketing strategies <br />to build your brand, generate leads and increase sales. <br /><a href="/herodesignstudio.com/our-work/">Let&rsquo;s do this!</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero-rocket.gif" width="25" height="36" align="absbottom" /></h1>
                    </div>
					<div class="hubCTA">
                    
                    <span class="hs-cta-wrapper" id="hs-cta-wrapper-cb899942-aaf5-4cec-9d7e-5e209150113b">
<!--HubSpot Call-to-Action Code -->
<span class="hs-cta-node hs-cta-cb899942-aaf5-4cec-9d7e-5e209150113b" id="hs-cta-cb899942-aaf5-4cec-9d7e-5e209150113b">
  <a href="http://info.herodesignstudio.com/redesign-your-website-ebook"><img class="hs-cta-img" id="hs-cta-img-cb899942-aaf5-4cec-9d7e-5e209150113b" style="border-width:0px" mce_noresize="1" alt="websiteredesign-site-magnet-1" src="//d1n2i0nchws850.cloudfront.net/portals/138188/946aa247-d75e-4f7e-8758-929a9d6ad01d-1325807004495/websiteredesign-site-magnet-1.gif?v=1325807004.82" /></a>
</span>
<script type="text/javascript">
(function(){
  var hsjs = document.createElement("script");
     hsjs.type = "text/javascript";
     hsjs.async = true;
     hsjs.src = "//cta-service.cms.hubspot.com/cta-service/loader.js?placement_guid=cb899942-aaf5-4cec-9d7e-5e209150113b";
  (document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(hsjs);
  setTimeout(function() {document.getElementById("hs-cta-cb899942-aaf5-4cec-9d7e-5e209150113b").style.visibility="hidden"}, 1);
  setTimeout(function() {document.getElementById("hs-cta-cb899942-aaf5-4cec-9d7e-5e209150113b").style.visibility="visible"}, 2000);
})();
</script>
<!-- HubSpot Call-to-Action Code -->
<!-- hs-cta-wrapper --></span>

                    
                    </div>
				</div>
                <!--End Primary Content-->
            
            
            
                <!--Begin Secondary Content-->
                <div class="homeFeatured">
                	
                    <div class="titleHeader">
                    	<span>New  Work</span>
                    	<a class="more" title="More Work" href="/our-work"><em>more work</em> +</a>
                    </div>
    				
<?php query_posts('category_name=featured&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="projectThumb">
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
                
                 <!--Begin Secondary Content-->
                <div class="homeBlogRoll">
                	
                    <div class="titleHeader">
                    	<span>Long Thoughts</span>
                    	<a class="more" target="_blank" href="http://blog.herodesignstudio.com/"><em>more thoughts</em> +</a>
                    </div>

<?php query_posts('category_name=long-thoughts1&showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="blogThumb">
                    	<a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="214" height="120" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <h2><a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><?php the_title(); ?></a></h2>
                        <?php the_content() ?>
                    </div>
<?php endwhile;?>

<?php query_posts('category_name=long-thoughts2&showposts=2'); ?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="blogThumb">
                    	<a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="214" height="120" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <h2><a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><?php the_title(); ?></a></h2>
                        <?php the_content() ?>
                    </div>
<?php endwhile;?>

<?php query_posts('category_name=long-thoughts3&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>

                    <div class="blogThumb" style="border:none; padding-right:0;">
                    	<a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="214" height="120" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                        <h2><a target="_blank" href="<?php $values = get_post_custom_values("link"); echo $values[0]; ?>"><?php the_title(); ?></a></h2>
                        <?php the_content() ?>
                    </div>
<?php endwhile;?>
                 
                 </div>
                <!--End Secondary Content-->
                
                <div class="shortThoughts">
                		<div class="titleHeader">
                    		<span>Short Thoughts</span>
                    		<a class="more" target="_blank" href="http://twitter.com/HeroStudio"><em>Twitter</em> +</a>
                    	</div>
                        <div id="tweet" style="width:205px;">
                        	<span class="tweetIndicator"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ajax-loader.gif" width="16" height="16" alt="Loading..." /></span>
                        </div>
                </div>
        
    
    		</div>
            <!--End Content-->

<?php get_footer(); ?>