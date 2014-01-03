<?php get_header(); ?>

<div id="blog-headline">
	<h4>Search Results</h4>
</div>
<!--End Blog Headline-->
<!--Start Blog Roll-->
<div id="blog-roll">
    <!--Start Post-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


    <div class="post">
        <p class="date"><?php the_time('F jS, Y') ?></p>
        <p class="headline"><?php the_title(); ?></p>
<?php the_content('<b>Read the rest of this entry &raquo;</b>'); ?>
	<div class="tags">
    	<p>Posted By: <i><?php the_author() ?></i></p>
		<p><?php the_tags('Tags: ', ', ', ''); ?><br /> Category: <?php the_category(', ') ?></p>
        <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
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

		<p class="headline">Not Found</p>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

<?php endif; ?>

      </div>
<!--End Blog Roll-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>