<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>


    <div class="posts">

		<?php
		if ( ! have_posts() ) {
			?>


            <h4 class="text-center"><?php _e( "No result found!", "alpha" ) ?></h4>
			<?php
		}

		?>



		<?php while ( have_posts() ): the_post(); ?>

			<?php get_template_part( "post-formates/content", get_post_format() ); ?>

		<?php endwhile; ?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">
					<?php
					the_posts_pagination( array(
						"screen_reader_text" => ' ',
						"prev_text"          => "New Post",
						"next_text"          => "Old Post"
					) );
					?>
                </div>
            </div>
        </div>


    </div>
<?php get_footer(); ?>