<div <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>">  <?php the_title(); ?></a>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<p>
					<strong><?php the_author(); ?></strong><br/>
					<?php echo get_the_date( "jS F, Y" ); ?>

				</p>
				<?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>" ); ?>
				<!--
				<ul class="list-unstyled">
					<li>dhaka</li>
				</ul>-->


				<?php

				$alpha_format = get_post_format();
				if($alpha_format == "video"){
					echo '<span class="dashicons dashicons-format-video"></span>';
				}


				?>


			</div>
			<div class="col-md-8">
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


					the_excerpt();
					?>
				</p>


			</div>
		</div>

	</div>
</div>