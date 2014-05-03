<?php get_header(); ?>
	<div class="wrap container" role="document">
		<div class="content">
			<div class="content-inner">
				<div class="row">
					<main class="main col-md-8" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
							<?php express_post_nav(); ?>
							<?php
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>
						<?php endwhile;?>
					</main>
					<aside class="sidebar col-md-4" role="complementary">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>