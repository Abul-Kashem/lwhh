<?php

/*
 * Template Name: Custom Query WPQuery
*/


get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="posts text-center">


		<?php
		$post_ids      = array( 79, 109, 66, 96, 39 );
		$post_per_page = 2;
		$paged         = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;


		$_p = new WP_Query( array(
			/*'post__in'       => $post_ids,
			'orderby'        => 'post__in',
			'posts_per_page' => $post_per_page,
			'paged'          => $paged,*/

//			This is for category wise filter

			/*'category_name'  => 'test',
			'posts_per_page' => $post_per_page,
			'paged'          => $paged,*/

//			This is for or field join wise filter
			'posts_per_page' => $post_per_page,
			'paged'          => $paged,
			'tax_query'      => array(
				'relation' => 'OR',
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => array( 'test' )
				),
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => array( 'special' )
				)
			)

		) );


		while ( $_p->have_posts() ) {
			$_p->the_post();

			?>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php
		}
		wp_reset_query();
		?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">
					<?php
					echo paginate_links( array(
						'total'     => $_p->max_num_pages,
						'current'   => $paged,
						'prev_next' => false,
//                        'prev_text'=>__('Old Posts', 'alpha'),
//                        'next_text'=>__('New Posts', 'alpha'),
					) );
					?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>