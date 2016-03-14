<?php // Topic Sections (ACF Repeater Field)

$display = get_field( 'mtm_home_stories_per_topic' );

if( have_rows( 'mtm_home_topic_sections' ) ): ?>

	<div class="mtm-component mtm-home-topics">
		<section class="content--page content--home-topics">

			<?php while( have_rows( 'mtm_home_topic_sections' ) ): the_row(); // Loop through each item ?>

				<?php $topic_tax_query = mtm_taxonomy_query_sub( 'home_topic', $display, 'DESC' );

				$i = 1; ?>

				<?php if( $topic_tax_query->have_posts() ) : ?>

					<div class="mtm-home-topic--single">
						<div class="mtm-home-topic--single-content">
					
						<?php while( $topic_tax_query->have_posts() ) : // Each Topic

							$topic_tax_query->the_post(); 

								if( 1 == $i++ ) { 

									// First story will load the header, image, and title
									mtm_get_template_part( 'mtm-content', 'home-topic-block' );

								} else {

									// All other stories just load title
									mtm_get_template_part( 'mtm-content', 'home-topic-small' );

								} ?>

						<?php endwhile; // End Topic ?>

						</div>
					</div>

				<?php endif; ?>

				<?php wp_reset_postdata();

			endwhile; // End Rows ?>

		</section>
	</div>

<?php endif; // End ACF Repeater Field ?>