<?php

/*
 * Template Name: Custom Query
*/


get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="posts text-center">


		<?php
		$post_ids      = array( 79, 109, 66, 96, 39 );
		$post_per_page = 2;
		$paged         = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;


		$author_post = 3;

		$_p = get_posts( array(
			/*'post__in'       => $post_ids,*/

			'orderby'        => 'post__in',
			/*'order' => 'ASC',*/
			'posts_per_page' => $post_per_page,
			'paged'          => $paged,
			'author__in'     => array( 2 ),
			'numberposts'    => $author_post
		) );


		foreach ( $_p as $post ) {
			setup_postdata( $post );

			?>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php
			wp_reset_postdata();
		}
		?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">
					<?php
					echo paginate_links( array(
//						'total' => ceil( count( $post_ids ) / $post_per_page )
						'total' => ceil( $author_post / $post_per_page )
					) );
					?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>