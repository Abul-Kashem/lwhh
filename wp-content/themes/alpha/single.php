<?php

$alpha_layout_class = "col-lg-8";
$alpha_text_class   = "";
if ( ! is_active_sidebar( "sidebar-1" ) ) {
	$alpha_layout_class = "col-lg-10 offset-lg-1";
	$alpha_text_class   = "text-center";
}

?>

<?php get_header(); ?>
<body <?php body_class( array( "first-class", "second-class" ) ); ?>>

<?php get_template_part( "/template-parts/common/hero" ); ?>
<div class="container">
    <div class="row">
        <div class="<?php echo $alpha_layout_class; ?>">
            <div class="posts <?php echo $alpha_text_class; ?>">

				<?php while ( have_posts() ):
				the_post(); ?>
                <div <?php post_class(); ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="post-title">
									<?php the_title(); ?>
                                </h2>
                                <p class="">
<!--                                    <strong>--><?php //the_author(); ?><!--</strong><br/>-->
                                    <em><?php the_author_posts_link(); ?></em><br>
									<?php echo get_the_date( "jS F, Y" ); ?>


                                </p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <p>
									<?php
									if ( has_post_thumbnail() ) {

										/*
										$thumbnail_url = get_the_post_thumbnail_url( null, "large" );
										printf( '<a href="%s" data-featherlight="image">', $thumbnail_url );
										the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
										echo '</a>';*/

										echo( '<a href="#" class="popup" data-featherlight="image">' );
										the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
										echo '</a>';
									}


									the_content();


									the_post_thumbnail( "alpha-square" );
									echo "<br>";
									the_post_thumbnail( "alpha-portrait" );
									echo "<br>";
									the_post_thumbnail( "alpha-landscape" );
									echo "<br>";
									the_post_thumbnail( "alpha-landscape-hard-crop" );
									echo "<br>";

									wp_link_pages();

									/*next_post_link();
									echo "<br>";
									previous_post_link();*/


									?>
                                </p>

                            </div>

<!--                            <div class="col-md-4"></div>-->
                        </div>
                        <div class="author-section">
                            <div class="row">
                                <div class="col-md-2 author-image">
									<?php echo get_avatar( get_the_author_meta( "id" ) ); ?>
                                </div>
                                <div class="col-md-10">
                                    <h4><?php echo get_the_author_meta( "display_name" ); ?></h4>
                                    <p><?php echo get_the_author_meta( "description" ); ?></p>
                                </div>
                            </div>
                        </div>

						<?php if ( comments_open() ) : ?>
                            <div class="col-md-10 offset-md-1">

								<?php comments_template(); ?>

                            </div>
						<?php endif; ?>


                    </div>

                </div>
            </div>


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
    </div>
	<?php if ( is_active_sidebar( "sidebar-1" ) ) : ?>
        <div class="col-lg-4">
			<?php
			if ( is_active_sidebar( "sidebar-1" ) ) {
				dynamic_sidebar( "sidebar-1" );
			}
			?>
        </div>
	<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>