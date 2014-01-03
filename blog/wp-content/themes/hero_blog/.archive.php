<?php get_header(); ?>

	<div id="blog-headline">

	<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h4 >Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h4 >Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h4 >Archive for <?php the_time('F jS, Y'); ?></h4>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h4 >Archive for <?php the_time('F, Y'); ?></h4>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h4 >Archive for <?php the_time('Y'); ?></h4>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h4 >Author Archive</h4>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 >Blog Archives</h4>
 	  <?php } ?>

</div>

      
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

