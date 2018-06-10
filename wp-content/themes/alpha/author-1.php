<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
<div class="container">
    <div class="author-section author-page">
        <div class="row">
            <div class="col-md-2 author-image">
				<?php echo get_avatar( get_the_author_meta( "id" ) ); ?>
            </div>
            <div class="col-md-10">
                <h4><?php echo strtoupper( get_the_author_meta( "display_name" )); ?></h4>
                <p><?php echo get_the_author_meta( "description" ); ?></p>
            </div>
        </div>
    </div>


</div>

    <div class="posts text-center">





		<?php while ( have_posts() ): the_post(); ?>


            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

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