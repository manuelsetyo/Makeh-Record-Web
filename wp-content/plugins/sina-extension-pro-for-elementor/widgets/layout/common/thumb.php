<div class="sina-posts-thumb sina-flex">
	<div class="sina-posts-thumb-img sina-overlay sina-bg-cover"
	<?php if ( has_post_thumbnail() ): ?>
		style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
	<?php else: ?>
		style="background-image: url(<?php echo esc_url( SINA_EXT_URL .'assets/img/featured-img.jpg' ); ?>);"
	<?php endif; ?>>
	</div>
	<div class="sina-overlay"></div>
	<div class="sina-posts-content">
		<?php if ( 'before' == $data['grid_cats_position'] ): ?>
			<div class="sina-posts-cats">
				<span>
					<i class="<?php echo esc_attr( $data['grid_cats_icon'] ); ?>"></i>
				</span>
				<?php echo get_the_category_list( ' | ' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( 'before' == $data['meta_position'] ): ?>
			<div class="sina-posts-meta">
				<?php the_author_posts_link(); ?>
				|
				<?php printf( '%s', get_the_date() ); ?>
			</div>
		<?php endif; ?>
		<h2 class="sina-posts-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php if ( 'after' == $data['grid_cats_position'] ): ?>
			<div class="sina-posts-cats">
				<span>
					<i class="<?php echo esc_attr( $data['grid_cats_icon'] ); ?>"></i>
				</span>
				<?php echo get_the_category_list( ' | ' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( 'after' == $data['meta_position'] ): ?>
			<div class="sina-posts-meta">
				<?php the_author_posts_link(); ?>
				|
				<?php printf( '%s', get_the_date() ); ?>
			</div>
		<?php endif; ?>
		<?php if ( 'yes' == $data['posts_excerpt'] && has_excerpt() ): ?>
			<div class="sina-posts-text">
				<?php
					$excerpt = preg_replace( '/'. get_shortcode_regex() .'/', '', get_the_excerpt() );
					echo wp_kses_post( wp_trim_words( $excerpt, $txt_len ) );
				?>
			</div>
		<?php elseif ( 'yes' == $data['posts_text'] ): ?>
			<div class="sina-posts-text">
				<?php
					$content = preg_replace( '/'. get_shortcode_regex() .'/', '', get_the_content() );
					echo wp_kses_post( wp_trim_words( $content, $txt_len ) );
				?>
			</div>
		<?php endif; ?>
	</div>
</div>