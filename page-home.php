<?php get_header(); ?>
<main class="pt-[71px]">
	<section class="container py-8">
		<div class="flex flex-col gap-y-4">
			<h1 class="text-6xl font-semibold">Maduro Irresponsable</h1>
			<h2 class="text-5xl mb-4">Ave Jaramillo</h2>
			<!-- <h3 class="text-4xl">Funciones:</h3> -->
		</div>
		<div class="grid grid-cols-4 gap-4">
			<?php 
				$args = array(
				'post_type' => 'tc_events',
				'post_per_page' => -1,
				'orderby' => array(
					'date' => 'ASC',
					)
				);
				$event_query = new WP_Query( $args );
				if ($event_query->have_posts()) {
					while ($event_query->have_posts()) {
						$event_query->the_post();
						$title = get_the_title();
						$pieces = explode(' ', $title);
						$last_word = array_pop($pieces);
						?>
						<div class="col-span-2 flex flex-col rounded-lg gap-y-4 border-2 border-ave-primary">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field('event_banner_mobile'); ?>" class="rounded-t w-full" />
							</a>
							<div class="px-4 flex flex-col gap-y-4">
								<a href="<?php the_permalink(); ?>" class="text-3xl font-semibold w-fit hover:underline"><?php echo $last_word ?></a>
								<div class="flex gap-x-2">
									<img src="<?php bloginfo('template_url'); ?>/assets/svg/calendar.svg" alt="Fecha evento" />
									<?php 
										$event_date = do_shortcode( '[tc_event_date]' );
										echo strtoupper($event_date)
									?>
									</div>
								<div class="flex gap-x-2">
									<img src="<?php bloginfo('template_url'); ?>/assets/svg/location.svg" alt="Ubicación evento" />
									<?php
										$event_location =  do_shortcode( '[tc_event_location]' );
										echo strtoupper($event_location)
									?>
								</div>
								<a href="<?php the_permalink(); ?>" class="bg-ave-primary rounded-md px-4 py-2 text-white w-fit mb-4 hover:opacity-80 transition-opacity">Comprar entradas</a>
							</div>
						</div>
						<?php
					}
				}
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>