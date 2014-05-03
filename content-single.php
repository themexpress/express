<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php express_posted_on(); ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'express' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php
			$tags_list = get_the_tag_list( '', __( ', ', 'express' ) );
			if ( $tags_list ) :
		?>
		<span class="tags-links">
			<?php printf( __( 'Tagged %1$s', 'express' ), $tags_list ); ?>
		</span>
		<?php endif; ?>
	</footer>
</article>
