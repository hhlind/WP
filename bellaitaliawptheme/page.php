<?php get_header(); ?>

	<section class="page-section">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="page-article">
			<?php the_content(''); ?>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</section>
	
<?php get_footer(); ?>