<?php get_header(); ?>
<?php
$title = get_the_title();
$quito = false;
$latacunga = false;
$ambato = false;
$riobamba = false;
if ($title == "Maduro Irresponsable Quito") $quito = true;
if ($title == "Maduro Irresponsable Ambato") $ambato = true;
if ($title == "Maduro Irresponsable Riobamba") $riobamba = true;
?>

<main class="pt-[71px]">
	<section>
		<img src="<?php the_field('event_banner_mobile'); ?>" class="block w-full sm:hidden" alt="Banner evento" />
		<img src="<?php the_field('event_banner_desktop'); ?>" class="hidden w-full sm:block" alt="Banner evento" />
	</section>
	<div class="container flex flex-col sm:flex-row justify-start text-sm sm:text-base my-4 gap-2 text-[#5d5d5d]">
		<div class="flex gap-x-2">
			<img src="<?php bloginfo('template_url'); ?>/assets/svg/calendar.svg" alt="Fecha evento" />
			<p class=" min-w-max">
				<?php $event_date = do_shortcode('[tc_event_date]');
				echo strtoupper(
					$event_date
				)
				?>
			</p>
		</div>
		<div class="flex gap-x-2">
			<img src="<?php bloginfo('template_url'); ?>/assets/svg/location.svg" alt="Ubicación evento" />
			<p class="min-w-max">
				<?php $event_location = do_shortcode('[tc_event_location]');
				echo
				strtoupper($event_location)
				?>
			</p>
		</div>
	</div>
	<section class="container">
		<h1 class="text-5xl sm:text-6xl font-semibold"><?php the_title(); ?></h1>
		<div class="my-4">
			<?php the_content(); ?>
		</div>
		<?php
		$event_tickets = get_field("event_tickets");
		if ($event_tickets) {
			echo $event_tickets;
		}
		?>
	</section>
	<section class="container py-8">
		<h2 class="text-5xl font-semibold">Otras Funciones</h2>
		<div class="grid grid-cols-3 grid-flow-row justify-between items-center gap-6 mt-4">
			<a href="https://tickets.foco-estudio.com/event/ave-uio" class="border text-center px-4 py-8 col-span-3 sm:col-span-2 lg:col-span-1 flex flex-col border-[#c2c2c2] rounded-lg <?php if ($quito) echo "border-ave-primary border-2" ?>">
				<p class="text-4xl font-light">mie</p>
				<p class="text-7xl font-bold">03</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Quito</p>
			</a>
			<a href="https://tickets.foco-estudio.com/event/ave-amb" class="border text-center px-4 py-8 col-span-3 sm:col-span-2 lg:col-span-1 flex flex-col border-[#c2c2c2] rounded-lg <?php if ($ambato) echo "border-ave-primary border-2" ?>">
				<p class="text-4xl font-light">vie</p>
				<p class="text-7xl font-bold">05</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Ambato</p>
			</a>
			<a href="https://tickets.foco-estudio.com/event/ave-rio" class="border text-center px-4 py-8 col-span-3 sm:col-span-2 lg:col-span-1 flex flex-col border-[#c2c2c2] rounded-lg <?php if ($riobamba) echo "border-ave-primary border-2" ?>">
				<p class="text-4xl font-light">sab</p>
				<p class="text-7xl font-bold">06</p>
				<p class="text-2xl font-light">abril, 2024</p>
				<p class="text-3xl font-light">Riobamba</p>
			</a>
		</div>

	</section>
</main>
<?php get_footer(); ?>
