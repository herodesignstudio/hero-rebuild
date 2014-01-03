<?php get_header(); ?>

<!--End Blog Headline-->
<!--Start Blog Roll-->
<div id="blog-roll">
    <!--Start Post-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php if (in_category('8')) continue; ?>


    <div class="post">
	<p class="backLink"><a href="http://blog.herodesignstudio.com">&laquo; Back to Blog Home</a></p>
        
        <p class="headline"><?php the_title(); ?></p>
	

<?php the_content('<b>Read the rest of this entry &raquo;</b>'); ?>
	<br /><br />
    

	<div class="tags">
    	    	<p>Posted By: <i><?php the_author() ?></i>&nbsp;&nbsp;<?php the_time('F jS, Y') ?></p>
		<p><?php the_tags('Tags: ', ', ', ''); ?><br /> Category: <?php the_category(', ') ?></p>
        <?php edit_post_link('Edit', '', '  '); ?> 
    <div id="comments">
    
    						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
						

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. 

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Comments are closed.

						<?php } edit_post_link('Edit this entry','','.'); ?>
                        
                        <?php comments_template(); ?>
    
    </div>
    </div>
</div>

<?php endwhile; ?>

            <!--End Post-->

<!--Start Bottom Nav-->
<div id="bottom-nav">
	<span class="left"><?php previous_post_link('%link', '&laquo; Previous post', TRUE); ?> </span>
	<span class="right"><?php next_post_link('%link', 'Next post &raquo;', TRUE); ?> </span>
</div>
<!--End Bottom Nav-->
<?php else : ?>

		<p class="headline">Not Found<</p>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

<?php endif; ?>

      </div>
<!--End Blog Roll-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>