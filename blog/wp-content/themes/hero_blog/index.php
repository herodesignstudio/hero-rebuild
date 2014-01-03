<?php get_header(); ?>


<!--End Blog Headline-->
<!--Start Blog Roll-->
<div id="blog-roll">
    <!--Start Post-->
    
 <?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>


<?php if (in_category('8')) continue; ?>


    <div class="post">
        
        <p class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?></a></p>
	

	<?php the_content('<b>Read the rest of this entry &raquo;</b>'); ?>
	
	<div class="tags">
    	<p>Posted By: <i><?php the_author() ?></i>&nbsp;&nbsp;<?php the_time('F jS, Y') ?></p>


        
		

        <!--<p><?php the_tags('Tags: ', ', ', ''); ?><br /> Category: <?php the_category(', ') ?></p>
        <?php edit_post_link('Edit', '', '   '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
    </div>
</div>
<?php endwhile; ?>

            <!--End Post-->

<!--Start Bottom Nav-->
<div id="bottom-nav">
	<span class="left"><?php next_posts_link('&laquo; Older Entries') ?></span>
	<span class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
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