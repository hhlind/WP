<?php 
/*
Template Name: Home
*/
?>


<?php get_header(); ?>

<section class="blog-home-section">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="blog-home-article">
				<h3 class="blog-home-article-header">
					
						<?php the_title(); ?>
				</h3>
				<small><?php the_time('F jS, Y') ?></small>
				<?php the_content('read more', false); ?>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>

</section>
<?php get_footer(); ?>