<?php get_header(); ?>
	<div class="wrap container" role="document">
		<div class="content">
			<div class="content-inner">
				<div class="row">
					<main class="main col-md-8" role="main">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
									if ( is_category() ) :
										single_cat_title();

									elseif ( is_tag() ) :
										single_tag_title();

									elseif ( is_author() ) :
										printf( __( 'Author: %s', 'express' ), '<span class="vcard">' . get_the_author() . '</span>' );

									elseif ( is_day() ) :
										printf( __( 'Day: %s', 'express' ), '<span>' . get_the_date() . '</span>' );

									elseif ( is_month() ) :
										printf( __( 'Month: %s', 'express' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'express' ) ) . '</span>' );

									elseif ( is_year() ) :
										printf( __( 'Year: %s', 'express' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'express' ) ) . '</span>' );

									elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
										_e( 'Asides', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
										_e( 'Galleries', 'express');

									elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
										_e( 'Images', 'express');

									elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
										_e( 'Videos', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
										_e( 'Quotes', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
										_e( 'Links', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
										_e( 'Statuses', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
										_e( 'Audios', 'express' );

									elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
										_e( 'Chats', 'express' );

									else :
										_e( 'Archives', 'express' );

									endif;
								?>
							</h1>
							<?php
								$term_description = term_description();
								if ( ! empty( $term_description ) ) :
									printf( '<div class="taxonomy-description">%s</div>', $term_description );
								endif;
							?>
						</header>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', get_post_format() ); ?>

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
