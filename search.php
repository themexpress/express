<?php get_header(); ?>
	<div class="wrap container" role="document">
		<div class="content">
			<div class="content-inner">
				<div class="row">
					<main class="main col-md-8" role="main">
						<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'express' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', 'search' ); ?>
							<?php endwhile; ?>
							<?php express_paging_nav(); ?>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
					</main>
					<aside class="sidebar col-md-4" role="complementary">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>