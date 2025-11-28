<?php get_header(); ?>

<div class="max-w-screen-xl mx-auto mt-16 px-6">
	<h1 class="font-poppins font-semibold text-xl lg:text-3xl text-center text-darkblue">Blog</h1>
	<div class="flex flex-col items-center justify-center mt-10">
		<div class="flex items-center bg-gray-100 rounded-lg md:w-96 h-16 py-3 px-5">
			<input type="text" placeholder="Search" id="WpSearchInput" class="w-full border-none bg-transparent placeholder:text-strongblue outline-none" oninput="searchWordPress()">
			<button onclick="searchWordPress()">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-strongblue">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
			</button>
		</div>
		<div id="WpSearchResult" class="flex flex-col gap-y-1 mt-3 lg:max-h-[350px] max-h-[200px] max-w-[600px] overflow-y-auto">
		</div>
	</div>
</div>

<div class="container max-w-screen-lg mx-auto my-8 flex flex-wrap justify-center gap-y-4 gap-x-4">

	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<div>
	<div class="text-center pt-36">
		<div class="p-4 md:p-0">
			<h1 class="text-darkblue text-3xl font-bold">PaYou HR <br> Solusi Canggih HR dan Payroll untuk
				Efisiensi Bisnis Anda</h1>
			<p class="md:w-1/3 mx-auto mt-5">PaYou HR menawarkan solusi menyeluruh untuk mengelola sumber daya
				manusia
				dan
				sistem Payroll,
				memberikan
				Anda kemudahan dan efisiensi dalam administrasi kepegawaian dan penggajian. Dengan fitur-fitur yang
				canggih dan intuitif, PaYou HR dapat menjadi mitra yang andal untuk mendukung kebutuhan HR dan
				pengelolaan gaji dalam perusahaan Anda.</p>
		</div>
		<div class="md:w-1/3 mx-auto">
			<h3 class="text-darkblue py-16 text-2xl">Kami membantu Kamu</h3>
			<div class="flex">
				<div class="w-1/2">
					<img src="/wp-content/themes/tailpress/assets/img/kontak/waicon.png" class="w-[50%] mx-auto">
					<p class="text-darkblue text-xl font-semibold">082 333 202020</p>
				</div>
				<div class="w-1/2">
					<div class="flex items-center">
						<img src="/wp-content/themes/tailpress/assets/img/kontak/igicon.png" class="w-[20%]">
						<p class="text-darkblue text-xl font-semibold ms-2">payou.asia</p>
					</div>
					<div class="flex items-center">
						<img src="/wp-content/themes/tailpress/assets/img/kontak/email.png" class="w-[20%]">
						<p class="text-darkblue text-xl font-semibold ms-2">info@payouhr.com</p>
					</div>
					<div class="flex items-center">
						<img src="/wp-content/themes/tailpress/assets/img/kontak/web.png" class="w-[20%]">
						<p class="text-darkblue text-xl font-semibold ms-2">payouhr.com</p>
					</div>
				</div>
			</div>
			<p class="text-start mt-10 text-darkblue pl-4">Kami selalu memaksimalkan layanan, dan mengutamakan
				solusi
				untuk memberikan layanan terbaik bagi
				kegiatan
				usaha Anda.</p>
		</div>
	</div>

	<div class="pt-20 text-center">
		<h1 class="text-darkblue text-3xl font-bold">Lihat fitur Kami</h1>
		<p>Komitmen Kami menghadirkan Aplikasi pembukuan yang berkualitas dengan harga yang terjangkau. .</p>
	</div>

	<div class="md:w-1/2 mx-auto grid grid-cols-1 md:grid-cols-3 gap-5 text-center py-28">
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/hrd">
				<img src="/wp-content/themes/tailpress/assets/img/blog_hrd.png" class="w-[70%] items-center mx-auto">
				<p class="mt-3 text-2xl">HRD</p>
			</a>
		</div>
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/project">
				<img src="/wp-content/themes/tailpress/assets/img/blog_project.png" class="w-[60%] items-center mx-auto">
				<p class="mt-3 text-2xl">Project</p>
			</a>
		</div>
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/outsourcing">
				<img src="/wp-content/themes/tailpress/assets/img/blog_outsourcing.png" class="w-[60%] items-center mx-auto">
				<p class="mt-3 text-2xl">Outsourcing</p>
			</a>
		</div>
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/fitur">
				<img src="/wp-content/themes/tailpress/assets/img/blog_payroll.png" class="w-[60%] items-center mx-auto">
				<p class="mt-3 text-2xl">Payroll</p>
			</a>
		</div>
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/fitur">
				<img src="/wp-content/themes/tailpress/assets/img/blog_finance.png" class="w-[60%] items-center mx-auto">
				<p class="mt-3 text-2xl">Finance</p>
			</a>
		</div>
		<div class="w-2/3 mx-auto rounded-lg border-2 transform hover:scale-105 border-darkblue px-10 py-7">
			<a href="https://payouhr.com/fitur">
				<img src="/wp-content/themes/tailpress/assets/img/blog_asuransi.png" class="w-[60%] mx-auto">
				<p class="mt-3 text-2xl">Asuransi</p>
			</a>
		</div>
	</div>

	<div class="md:w-1/2 mx-auto ">
		<div class="text-center">
			<h1 class="text-darkblue text-3xl font-text-darkblue font-bold ms-2t-xl">Cari Aplikasi?</h1>
			<p>Dapatkan juga Aplikasi yang dikembangkan oleh Group Kami</p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-5 text-center py-20">
			<div class="w-3/4 mx-auto bg-cover py-7 transform hover:scale-110 rounded-xl" style="background-image: url(/wp-content/themes/tailpress/assets/img/blog_bg_payou.png)">
				<a href="https://payou.asia">
					<img src="/wp-content/themes/tailpress/assets/img/blog_icons_payou.png" class="w-[23%] mx-auto" alt="">
					<p class="text-white text-xl">Akuntansi & Pembukuan</p>
				</a>
			</div>
			<div class="w-3/4 mx-auto bg-cover py-7 transform hover:scale-110 rounded-xl" style="background-image: url(/wp-content/themes/tailpress/assets/img/blog_bg_saffmedic.png)">
				<a href="https://saffmedic.com">
					<img src="/wp-content/themes/tailpress/assets/img/blog_icons_saffmedic.png" class="w-[30%] mx-auto" alt="">
					<p class="text-white text-xl">Rumah Sakit</p>
				</a>
			</div>
			<div class="w-3/4 mx-auto bg-cover py-7 transform hover:scale-110 rounded-xl" style="background-image: url(/wp-content/themes/tailpress/assets/img/blog_bg_custom.png)">
				<a href="https://saffix.id">
					<img src="/wp-content/themes/tailpress/assets/img/blog_icons_custom.png" class="w-[35%] mx-auto" alt="">
					<p class="text-white text-xl">Custome</p>
				</a>
			</div>
		</div>
	</div>

	<div class="md:w-1/2 mx-auto text-center">
		<h1 class="text-3xl text-darkblue font-bold">PaYou HR <br> Solusi Canggih untuk Manajemen HR dan Payroll
		</h1>
		<h1 class="text-3xl text-darkblue mt-5">PaYou HR menyediakan solusi terdepan untuk manajemen HR dan
			Payroll, memberikan kemudahan dan efisiensi
			dalam administrasi bisnis Anda</h1>
		<div class="flex md:flex-row flex-col justify-center w-fit mx-auto md:gap-10 my-20">
			<button class="bg-darkblue hover:bg-strongblue md:w-[200px] text-white font-semibold rounded-md mb-5">
				<span class="flex justify-center items-center p-3">
					<img class="mr-3" src="/wp-content/themes/tailpress/assets/img/jadwalkan-demo.png" width="25" alt="Demo">
					<a href="https://meetings.hubspot.com/saka-access-fix">Atur Jadwal Demo</a>
				</span>
			</button>
			<button class="bg-darkblue hover:bg-strongblue md:w-[200px] text-white font-semibold rounded-md mb-5">
				<span class="flex justify-center items-center p-3">
					<img class="mr-3" src="/wp-content/themes/tailpress/assets/img/whatsappicon.png" width="25" alt="Whatsapp">
					<a href="https://api.whatsapp.com/send?phone=6282333202020">Hubungi Kami</a>
				</span>
			</button>
		</div>
	</div>
</div>

<?php
get_footer();
