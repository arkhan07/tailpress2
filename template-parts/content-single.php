<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<?php if (has_post_thumbnail()) {
			echo '<div class="post-thumbnail w-[100%] flex justify-center mb-10">';
			echo get_the_post_thumbnail();
			echo '</div>';
		} ?>
		<?php the_title(sprintf('<h1 class="entry-title text-darkblue text-center text-2xl lg:text-3xl font-semibold leading-tight mb-10"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<!-- <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm font-medium text-gray-400"><?php echo get_the_date(); ?></time> -->
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>

<div id="disqus_thread" class="max-w-screen-lg mx-auto px-4 mt-16"></div>