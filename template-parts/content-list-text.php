<?php
/**
 * Template part for displaying post list content in a text layout
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */
?>

<article class="post-list__item post-list__item--text">

	<h2 class="post-list__item-title post-list__item-title--text">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<div class="post-list__item-meta post-list__item-meta--text post-meta">
		<span class="post-meta__value post-meta__date"><?php echo get_the_date(); ?></span>
		<span class="post-meta__value post-meta__category"><?php pvd_the_post_category(); ?></span>
	</div>

	<?php if ( $post->post_excerpt ) : ?>
	<div class="post-list__item-excerpt wp-content">
		<?php echo apply_filters( 'the_excerpt', $post->post_excerpt ); ?>
	</div>
	<?php endif; ?>
</article>
