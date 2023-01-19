<?php get_header(); ?>
<div class="single_custom_blog">

    <div class="container">
		<?php
		if ( isset( $_GET['date'] ) ) {
			$date_filter = $_GET['date'];
			$date_filter = explode( ' ', $date_filter );
		}

		$args  = array(
			'fields'         => 'post_date',
			'posts_per_page' => - 1,
			'post_type'      => 'blogs',
			'order'          => 'DESC',
			'orderby'        => 'date',
		);
		$posts = get_posts( $args );
		$date  = [];
		?>
        <select name="date_filter" id="date_filter" onchange="myFunction()">

			<?php
			// The Loop
			foreach ( $posts as $post ) {
				if ( ! in_array( get_the_date( 'Y m d', $post->ID ), $date ) ) {
					$date[] = get_the_date( 'Y m d', $post->ID );
					?>

                    <option value="<?php echo get_the_date( 'Y m d', $post->ID ) ?>" 
                    	<?= (isset($_GET['date']) && get_the_date( 'Y m d', $post->ID ) == $date_filter[0] .' '.$date_filter[1].' '.$date_filter[2]) ? 'selected=true' : '' ?>
                    >
                        <a href="<?php echo get_the_date( 'M d Y', $post->ID ) ?>"><?php echo get_the_date( 'M d, Y', $post->ID ) ?>                        </a>
                    </option>


				<?php }
			} ?>

        </select>
		<?php
		
		$args1 = array(
			'post_type'      => 'blogs',
			'posts_per_page' => 1,
			'order'          => 'DESC',
			'orderby'        => 'date',
			'offset'         => 0,
		);

		if ( isset( $_GET['date'] ) ) {
			$date_filter = $_GET['date'];
			$date_filter = explode( ' ', $date_filter );
			$args1['date_query'] = array(
					array(
						'year'  => $date_filter[0],
						'day'   => $date_filter[2],
						'month' => $date_filter[1],
					)
            );
		}
 
		$the_query = new WP_Query( $args1 );
		wp_reset_postdata();
		wp_reset_query();
		
		while ( $the_query->have_posts() ) :$the_query->the_post(); ?>

            <div class="top">
                <div class="author">
                    <div class="info">
						<?php
						$get_author_id       = get_the_author_meta( 'ID' );
						$get_author_gravatar = get_avatar_url( $get_author_id );
						echo '<img src="' . $get_author_gravatar . '" alt="' . get_the_title() . '" />';
						?>

                        <p> by <?php echo get_the_author_meta( 'user_firstname' ); ?></p>
                    </div>


                </div>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h4><?php the_excerpt(); ?></h4>

                <img src="<?php the_post_thumbnail_url(); ?>" class="fimage">

                <div class="main-content">
					<?php the_content(); ?>
                </div>

            </div>
		
		<?php endwhile;

		wp_reset_postdata();
		wp_reset_query();
?>

    </div>

</div>


<?php get_footer(); ?>




