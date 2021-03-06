<?php
/**
 * Template part for displaying post list content in a tout layout
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ianpvd
 */
?>

<article class="post-list__item post-list__item--portfolio">

	<?php if ( has_post_thumbnail() ) : ?>
	<figure class="post-list__item-thumbnail post-thumbnail">
		<a href="<?php echo esc_url( pvd_work_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" target="_blank" class="post-thumbnail__frame post-thumbnail__frame--portfolio">
			<?php the_post_thumbnail( 'portfolio-thumbnail' ); ?>
		</a>
	</figure>
	<?php endif; ?>

	<h2 class="post-list__item-title">
		<a href="<?php echo esc_url( pvd_work_permalink() ); ?>" target="_blank">
			<?php the_title(); ?>
		</a>
	</h2>

	<div class="post-list__item-meta post-list__item-meta--portfolio">
		<span class="post-meta__value">
			<?php pvd_work_platform(); ?>
		</span>
		<?php pvd_work_technology_list( [ 'empty_text' => NULL ] ); ?>
	</div>
</article>
