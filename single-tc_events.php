<?php get_header(); ?>
<main class="pt-[59px]">
	<section>
		<img
			src="<?php the_field( 'event_banner_mobile' ); ?>"
			class="block w-full sm:hidden"
			alt="Banner evento"
		/>
		<img
			src="<?php the_field( 'event_banner_desktop' ); ?>"
			class="hidden w-full sm:block"
			alt="Banner evento"
		/>
	</section>
	<div class="container flex my-4 gap-x-2 text-[#5d5d5d]">
		<img
			src="<?php bloginfo( 'template_url' ); ?>/Assets/svg/calendar.svg"
			alt="Fecha evento"
		/>
		<?php $event_date = do_shortcode( '[tc_event_date]' );
		echo strtoupper(
			$event_date ) ?>
		<img
			src="<?php bloginfo( 'template_url' ); ?>/Assets/svg/location.svg"
			alt="Ubicación evento"
		/>
		<?php $event_location = do_shortcode( '[tc_event_location]' );
		echo
			strtoupper( $event_location ) ?>
	</div>
	<section class="container">
			<h1 class="text-6xl font-semibold"><?php the_title(); ?></h1>
			<div class="my-4">
				<?php the_content(); ?>
			</div>
			<?php
			$event_tickets = get_field( "event_tickets" );
			if ( $event_tickets ) {
				echo $event_tickets;
			}
			?>
	</section>
	<section class="container py-8"> 
		<h2 class="text-5xl font-semibold">Otras Funciones</h2>
		<div class="flex gap-x-6 mt-4">
			<div class="border text-center px-4 py-8 w-1/4 flex flex-col border-[#c2c2c2] rounded-lg">
				<p class="text-4xl font-light">lun</p>
				<p class="text-7xl font-bold">01</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Ambato</p>
			</div>
			<div class="border text-center px-4 py-8 w-1/4 flex flex-col border-[#c2c2c2] rounded-lg">
				<p class="text-4xl font-light">lun</p>
				<p class="text-7xl font-bold">01</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Ambato</p>
			</div>
			<div class="border text-center px-4 py-8 w-1/4 flex flex-col border-[#c2c2c2] rounded-lg">
				<p class="text-4xl font-light">lun</p>
				<p class="text-7xl font-bold">01</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Ambato</p>
			</div>
			<div class="border text-center px-4 py-8 w-1/4 flex flex-col border-[#c2c2c2] rounded-lg">
				<p class="text-4xl font-light">lun</p>
				<p class="text-7xl font-bold">01</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Ambato</p>
			</div>
		</div>

	</section>
</main>
<?php get_footer(); ?>
