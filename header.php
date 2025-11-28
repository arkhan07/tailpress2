<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<style>
		/* whatsapp button */
		#whatsapp {
			position: fixed;
			bottom: 90px;
			right: 26px;
			animation: fadeEffect 3s;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>

			<nav>
				<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
					<a href="https://payouhr.com/" class="flex items-center space-x-3 rtl:space-x-reverse" aria-label="home">
						<img class="w-16" src="/wp-content/themes/tailpress/assets/img/payouhr_logo.png" alt="PaYou HR Logo">
					</a>
					<button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-darkblue rounded-lg md:hidden hover:bg-white" aria-controls="navbar-dropdown" aria-expanded="false">
						<span class="sr-only">Open main menu</span>
						<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
						</svg>
					</button>
					<div class="hidden w-full md:block md:w-auto mt-1" id="navbar-dropdown">
						<ul class="flex flex-col md:text-xl text-base md:font-bold font-semibold p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 bg-lavender md:bg-transparent rounded-md">
							<li>
								<a href="https://payouhr.com/" class="block md:text-darkblue text-white px-[6px] md:py-[1px] py-[10px] rounded-md hover:text-white hover:bg-darkblue">Beranda</a>
							</li>
							<li>
								<a href="https://payouhr.com/fitur" class="block md:text-darkblue text-white px-[6px] md:py-[1px] py-[10px] rounded-md hover:text-white hover:bg-darkblue">Fitur</a>
							</li>
							<li class="relative">
								<div class="hidden md:block">
									<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full px-[6px] md:py-[1px] py-[10px] text-darkblue rounded hover:bg-darkblue md:border-0 hover:text-white">Solusi
										<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
										</svg>
									</button>
								</div>

								<!-- Dropdown Desktop menu -->
								<div id="dropdownNavbar" class="absolute left-0 top-full mt-2 z-50 hidden font-bold bg-darkblue rounded-lg shadow md:w-[700px] pe-8 ps-2">
										<div class="w-fit">
											<ul class="py-2 text-2xl text-white" aria-labelledby="dropdownLargeButton">
												<li>
													<button id="nav-button1" class="nav-button w-fit m-5 transition-transform transform hover:scale-110 px-4 py-2 rounded bg-white text-darkblue" onclick="toggleNavbarContent('nav-content1', 'nav-button1')">
														Rules
													</button>

													<!-- Content -->
													<div id="nav-content1" class="nav-content text-base">
														<div class="w-1/2 ms-3">
															<ul>
																<li class="flex items-center mt-8">
																	<a href="https://payouhr.com//hrd" class="block ps-4 pe-12 py-2 border-b hover:bg-white hover:text-darkblue">HRD</a>
																</li>
																<li class="flex items-center">
																	<a href="https://payouhr.com/eksekutif" class="block px-4 py-2 border-b hover:bg-white hover:text-darkblue">Eksekutif</a>
																</li>
															</ul>
														</div>
														<div class="w-full text-justify font-light px-5">
															<h1 class="mb-2 text-lg font-bold">RULES</h1>
															<p>PaYou HR: Solusi HR dan Payroll berdasarkan aturan atau peran
																seperti Eksekutif, Manager HRD, Manager Keuangan, dll.</p>
															<hr class="mt-10">
														</div>
														<img src="/wp-content/themes/tailpress/assets/img/rules.png" width="181" height="173" alt="rules">
													</div>
													<!-- End Content -->
												</li>
												<li>
													<button id="nav-button2" class="nav-button w-fit m-5 transition-transform transform hover:scale-110 px-4 py-2 rounded bg-white text-darkblue" onclick="toggleNavbarContent('nav-content2', 'nav-button2')">
														Bisnis
													</button>

													{{-- Content --}}
													<div id="nav-content2" class="nav-content text-base pb-10">
														<div class="w-1/2 ms-3">
															<ul>
																<li class="flex items-center mt-1">
																	<a href="https://payouhr.com/general" class="block ps-4 pe-11 py-2 border-b hover:bg-white hover:text-darkblue">General</a>
																</li>
																<li class="flex items-center">
																	<a href="https://payouhr.com/project" class="block ps-4 pe-11 py-2 border-b hover:bg-white hover:text-darkblue">Project</a>
																</li>
																<li class="flex items-center">
																	<a href="https://payouhr.com/outsourcing" class="block px-4 py-2 border-b hover:bg-white hover:text-darkblue">Outsourcing</a>
																</li>
															</ul>
														</div>
														<div class="w-full text-justify font-light px-5">
															<h1 class="mb-2 text-lg font-bold">BISNIS</h1>
															<p>PaYou HR: Solusi HR dan Payroll berdasarkan tipe bisnis seperti
																Outsourcing, perdagangan Umum, dll.</p>
															<hr class="mt-10">
														</div>
														<img src="/wp-content/themes/tailpress/assets/img/bisnis.png" width="181" height="141" alt="bisnis">
													</div>
													<!-- End Content -->
												</li>
											</ul>
										</div>
									</div>

								<!-- Dropdown mobile menu -->
								<div class="relative w-full overflow-hidden mx-auto md:hidden">
									<input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
									<div class="h-7 w-full flex items-center rounded ms-[6px] my-2">
										<h1 class="sm:text-lg text-base font-semibold text-white">
											Solusi
										</h1>
									</div>

									<!-- Arrow Icon -->
									<div class="absolute top-2 right-3 text-white transition-transform duration-500 rotate-0 peer-checked:rotate-180">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
											<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
										</svg>
									</div>

									<div class="overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-full">
										<ul class="p-5 text-sm text-white border rounded-lg" aria-labelledby="dropdownLargeButton">
											<div class="relative w-full overflow-hidden mx-auto">
												<input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
												<div class="h-5 w-full flex items-center rounded ms-[6px] my-2">
													<h1 class="sm:text-lg text-base font-semibold text-white">
														HRD
													</h1>
												</div>

												<!-- Arrow Icon -->
												<div class="absolute top-3 right-3 text-white transition-transform duration-500 rotate-0 peer-checked:rotate-180">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
													</svg>
												</div>

												<!-- Content -->
												<div class="overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-full">
													<li>
														<a href="https://payouhr.com/hrd" class="block px-4 py-2 rounded hover:bg-darkblue hover:text-white">Rules
															-
															Hrd</a>
													</li>
													<li>
														<a href="https://payouhr.com/eksekutif" class="block px-4 py-2 rounded hover:bg-darkblue hover:text-white">Rules
															-
															Eksekutif</a>
													</li>
												</div>
											</div>

											<div class="relative w-full overflow-hidden mx-auto">
												<input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
												<div class="h-5 w-full flex items-center rounded ms-[6px] my-2">
													<h1 class="sm:text-lg text-base font-semibold text-white">
														BISNIS
													</h1>
												</div>

												<!-- Arrow Icon -->
												<div class="absolute top-3 right-3 text-white transition-transform duration-500 rotate-0 peer-checked:rotate-180">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
													</svg>
												</div>

												<!-- Content -->
												<div class="overflow-hidden transition-all duration-600 max-h-0 peer-checked:max-h-full">
													<li>
														<a href="https://payouhr.com/general" class="block px-4 py-2 rounded hover:bg-darkblue hover:text-white">Bisnis
															-
															General</a>
													</li>
													<li>
														<a href="https://payouhr.com/project" class="block px-4 py-2 rounded hover:bg-darkblue hover:text-white">Bisnis
															-
															Project</a>
													</li>
													<li>
														<a href="https://payouhr.com/outsourcing" class="block px-4 py-2 rounded hover:bg-darkblue hover:text-white">Bisnis
															-
															Outsourcing</a>
													</li>
												</div>
											</div>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<a href="https://payouhr.com/harga" class="block md:text-darkblue text-white px-[6px] md:py-[1px] py-[10px] rounded-md hover:text-white hover:bg-darkblue">Harga</a>
							</li>
							<li>
								<a href="https://payouhr.com/kontak" class="block md:text-darkblue text-white px-[6px] md:py-[1px] py-[10px] rounded-md hover:text-white hover:bg-darkblue">Kontak</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<script>
				// Toggle dropdown "Solusi" menu
				document.addEventListener('DOMContentLoaded', function() {
					const dropdownButton = document.getElementById('dropdownNavbarLink');
					const dropdownMenu = document.getElementById('dropdownNavbar');

					if (dropdownButton && dropdownMenu) {
						dropdownButton.addEventListener('click', function(e) {
							e.preventDefault();
							dropdownMenu.classList.toggle('hidden');
						});

						// Close dropdown when clicking outside
						document.addEventListener('click', function(event) {
							if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
								dropdownMenu.classList.add('hidden');
							}
						});
					}
				});

				// Toggle submenu content (Rules/Bisnis)
				function toggleNavbarContent(navContentId, activeNavButtonId) {
					const navContentElements = document.querySelectorAll('.nav-content');
					const navButtonElements = document.querySelectorAll('.nav-button');

					navContentElements.forEach((navContent) => {
						navContent.style.display = 'none';
					});

					navButtonElements.forEach((navButton) => {
						navButton.style.display = 'block';
						navButton.classList.remove('border-darkblue');
						navButton.classList.add('bg-transparent');
					});

					const activeNavContent = document.getElementById(navContentId);
					const activeNavButton = document.getElementById(activeNavButtonId);

					activeNavContent.style.display = 'flex';
					activeNavButton.classList.add('border-darkblue');
					activeNavButton.classList.remove('bg-transparent');
				}

				// Initialize the active state on load
				document.addEventListener('DOMContentLoaded', function() {
					toggleNavbarContent('nav-content1', 'nav-button1');
				});
			</script>

			<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
			<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
			<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		</header>

		<div id="content" class="site-content flex-grow">

			<?php if (is_front_page()) { ?>
				<!-- Start introduction -->
				<!-- <div class="container mx-auto">
					<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
						<div class="mx-auto max-w-screen-md">
							<h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
								with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
							<p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
								point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
								of the box.</p>
							<a href="https://github.com/jeffreyvr/tailpress" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
								on GitHub</a>
						</div>
					</div>
				</div> -->
				<!-- End introduction -->
			<?php } ?>

			<?php do_action('tailpress_content_start'); ?>

			<main>