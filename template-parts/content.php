<article id="post-<?php the_ID(); ?>" <?php post_class('mb-4 w-[300px] bg-gray-100 rounded-lg p-4 flex flex-col items-start justify-between'); ?>>

	<header class="entry-header flex flex-col justify-between">
		<?php if (has_post_thumbnail()) {
			echo '<div class="post-thumbnail w-[100%] rounded-xl">';
			echo '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">';
			echo get_the_post_thumbnail();
			echo '</a>';
			echo '</div>';
		} ?>
		<?php the_title(sprintf('<h2 class="entry-title text-base lg:text-lg text-darkblue font-semibold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="font-medium text-sm text-gray-400"><?php echo get_the_date(); ?></time>
		<!-- <h2 class="entry-title text-base lg:text-lg text-persianblue font-semibold leading-tight mb-1">
            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                <?php echo esc_html(get_post_field('post_name', get_the_ID())); ?>
            </a>
        </h2> -->

		<!-- <div>
			<?php $content = get_the_content();
			$trimmed_content = wp_trim_words($content, 50); // Displaying 50 words, you can change this number as needed
			echo $trimmed_content; ?>
		</div> -->


	</header>

	<?php if (is_search() || is_archive()) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	<?php else : ?>



	<?php endif; ?>

</article>