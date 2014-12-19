<?php get_header(); ?>
<section class="single-post-section">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article class="single-post-article">
				<h3 class="single-post-heading"><?php the_title(); ?></h3>				
				<p class="single-post-date"><?php the_time('F jS, Y') ?><p>
				<?php the_content(''); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>

</section>

<?php get_footer(); ?>