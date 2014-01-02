<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

		<!--Begin Content-->
    		<div class="content">
            
            <div class="company-content">
           	  <h1>About Hero</h1>
              <div id="TabbedPanels1" class="TabbedPanels">
                  <ul class="TabbedPanelsTabGroup">
                    <li class="TabbedPanelsTab">How We Work</li>
                    <li class="TabbedPanelsTab">About Us</li>
                  
                   <li class="TabbedPanelsTab">Experience</li>
                  
                   <li class="TabbedPanelsTab">Services</li>
                  </ul>
                  
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent"> <p>At Hero, we believe our role is to help clients create a unique voice that speaks in clear and compelling ways.
Our goal is to create tangible value through design that is inspired by research, creative insight, best practice and innovation. Our process uses technologies, old and new, to foster collaboration, manage projects and ensure the quality of our work.</p>
                      
<h3>Our Approach</h3>

<p>Learn more about our approach and capabilities. This short presentation gives you<br />
  five good reasons to choose Hero.<br />
 <a href="http://www.herodesignstudio.com/presentation/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/presentation-icon.gif" width="21" height="21" align="absmiddle" style="margin-bottom:3px;"/> &nbsp;Click Here</a></p>
 <br /><br />
 <h3>Agency Support</h3>

<p>We often team with Ad agencies, Design and PR firms on projects ranging from websites and email campaigns to catalogs and brochures. Find out why Hero is a partner you can trust. <br />
<a href="/hero-for-advertising-agencies/">Click Here</a></p>

                    </div>
                    <div class="TabbedPanelsContent"><p>At Hero, we are designers who make things. Things made from paper and pixels, ink and code. We care for the details and the craft of bringing designs to life. While Hero is filled with doers, we are also thinkers — idea folks. We love to craft a concept, a headline, and a campaign just as much as we love to explore the design of a page.

We are a small studio with depth and flexibility. We&rsquo;ve cultivated a diverse mix of clients who challenge and inspire us to do great work. Keeping our team small makes every staff member a significant contributor and puts everyone in direct contact with our clients. We believe that fosters trust and confidence — while decreasing costs and increasing value.</p>


            <div class="company-profiles">
            <a href="mailto:jeff@herodesignstudio.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jeffmason_thumbnail.jpg" alt="Jeff Mason, Creative Director" title="Jeff Mason, Creative Director" width="96" height="120" style="float:left; margin-right:10px;"/></a>
            <p><strong>Jeff Mason</strong><br />
              <em style="color:#999999;">Creative Director</em></p>
              <p>"If it wasn't for coffee, I'd have <br />
              no discernible personality at all."</p>
              <p><strong><a href="mailto:jeff@herodesignstudio.com">jeff@herodesignstudio.com</a></strong></p>
              <p><a href="http://www.linkedin.com/profile?viewProfile=&key=13830801&locale=en_US&trk=tab_pro" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin_icon_sm.gif" alt="LinkedIn Profile" width="15" height="15" align="top" /> LinkedIn</a></p>
            </div>
</div>
                    <div class="TabbedPanelsContent">
                    <p>Hero's work has spanned many industries and many different customers. Have we worked in your market? Maybe. Can we understand your needs and the needs of your customers? Absolutely. </p>
                    
            <h3>Areas of Experience:</h3>
              <ul style="margin-top:8px;">
              <li>Engineering</li>
              <li>Travel and Hospitality</li>
              <li>Resorts and Destinations</li>
              <li>Non-Profit &amp; Charities</li>
              <li>Real Estate</li>
              <li>Consumer Goods</li>
              <li>Foods and Beverage</li>
              <li>Sporting Goods &amp; Outdoor Retail</li>
              <li>Healthcare</li>
              <li>Technology</li>
              </ul>
              </div>
                    <div class="TabbedPanelsContent">
                      <div class="services">
          <h3>Identity &amp; Branding</h3>
        <ul>
         <li>Logo design         </li>
         <li>Letterhead design           </li>
         <li>Style guides           </li>
         <li>Usage guides</li>
        </ul>
        
        <h3>Web Design &amp; eMarketing</h3>
         <ul>
         <li>Website design &amp; development         </li>
         <li>Email marketing and newsletters         </li>
         <li>Interactive banner ads </li>
         </ul>
        
        <h3>Environmental Design</h3>
         <ul>
         <li>Signage - interior &amp; exterior         </li>
         <li>Event spaces
           Tradeshow booths           </li>
         <li>POP dispalys</li>
         </ul>
        
        <h3>Content Writing</h3>
         <ul>
         <li>Newsletter articles         </li>
         <li>HTML email
           Copy editing</li>
         </ul>
        </div>
          <div class="services">
		<h3>Print Design &amp; Copywriting</h3>
         <ul>
         <li>Advertising campaigns         </li>
         <li>Catalogs
           Brochures           </li>
         <li>Posters           </li>
         <li>Annual reports           </li>
         <li>Product packaging           </li>
         <li>Billboards &amp; outdoor media           </li>
         <li>Direct mail</li>
         </ul>
        
        <h3>Graphic Production</h3>
         <ul>
         <li>Page Layout         </li>
         <li>Re-sizing           </li>
         <li>Color correction           </li>
         <li>Retouching &amp; compositing           </li>
         <li>Print production           </li>
         <li>HTML/CSS markup</li>
         </ul>
		</div>
                    
                    </div>
                  </div>
              </div>
            </div>
            
            
         <div class="aboutThumbs">
<?php query_posts('category_name=featured&showposts=2'); ?>
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
				
    
</div>
<!--End Content-->
<script type="text/javascript">
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>


<?php get_footer(); ?>