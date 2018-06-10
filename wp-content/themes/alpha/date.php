<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="posts text-center">

        <h1>
            Post In
			<?php
			if ( is_month() ) {
                $month = esc_html(get_query_var("monthnum"));
                $date_obj = DateTime::createFromFormat("!m",$month);
                echo $date_obj->format("F");
			}else if (is_year()){
			    echo esc_html(get_query_var("year"));
            }else if (is_date()){
			    $day = esc_html(get_query_var("day"));
			    $month = esc_html(get_query_var("monthnum"));
			    $year = esc_html(get_query_var("year"));
			    printf ("%s/%s/%s", $day, $month, $year);
            }


			?>


        </h1>


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