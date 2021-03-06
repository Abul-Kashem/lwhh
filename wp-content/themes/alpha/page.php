<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="container">
		<?php if ( is_front_page() ) { ?>
            <div class="row">
                <div class="col-md-8 offset-md-2">
					<?php


					$attachments = new Attachments( 'testimonials', 12 );
					if ( class_exists( 'Attachments' ) && $attachments->exist() ) {
						?>
                        <h2 class="text-center"><?php _e( 'Testimonials', "alpha" ); ?></h2>
						<?php
					}

					?>


                    <div class="testimonials slider text-center">
						<?php

						if ( class_exists( 'Attachments' ) ) {
							if ( $attachments->exist() ) {
								while ( $attachment = $attachments->get() ) {
									?>
                                    <div class="">
										<?php echo $attachments->image( 'thumbnail' ); ?>
                                        <h4><?php echo esc_html( $attachments->field( 'name' ) ); ?></h4>
                                        <p><?php echo esc_html( $attachments->field( 'description' ) ); ?></p>
                                        <p>
											<?php echo esc_html( $attachments->field( 'position' ) ); ?>
                                            <strong><?php echo esc_html( $attachments->field( 'company' ) ); ?></strong>

                                        </p>
                                    </div>


									<?php
								}
							}
						}


						?>
                    </div>

                </div>
            </div>
		<?php } ?>
    </div>


	<div class="posts">

		<?php while ( have_posts() ): the_post(); ?>
			<div class="post" <?php post_class(); ?>>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h2 class="post-title text-center">
								<a>  <?php the_title(); ?></a>
							</h2>
							<p class="text-center">
								<strong><?php the_author(); ?></strong><br/>
								<?php echo get_the_date( "jS F, Y" ); ?>

							</p>
						</div>
					</div>
					<div class="row">

						<div class="col-md-10 offset-md-1">
							<p>
								<?php
								if ( has_post_thumbnail() ) {
									/*$thumbnail_url = get_the_post_thumbnail_url( null, "large" );
									printf( '<a href="%s" data-featherlight="image">', $thumbnail_url );
									the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
									echo '</a>';*/

									echo( '<a href="#" class="popup" data-featherlight="image">' );
									the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
									echo '</a>';

								}


								the_content();
								?>
							</p>


						</div>
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
<?php get_footer(); ?>