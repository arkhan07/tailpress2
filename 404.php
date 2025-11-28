<?php get_header(); ?>  <!-- universal -->

<main id="main" class="site-main" role="main">

    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title">
                <?php esc_html_e('Oops! That page can&rsquo;t be found.', 'textdomain'); ?> <!-- change textdomain -->
            </h1>
        </header>

        <div class="page-content">
            <p>
                <?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'textdomain'); ?> <!-- change textdomain -->
            </p>

            <?php get_search_form(); ?>

            <?php the_widget('WP_Widget_Recent_Posts'); ?>

            <div class="widget widget_categories">
                <h2 class="widget-title">
                    <?php esc_html_e('Most Used Categories', 'textdomain'); ?> <!-- change textdomain -->
                </h2>
                <ul>
                    <?php wp_list_categories(
                        array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            'title_li' => '',
                            'number' => 10,
                        )); ?>
                </ul>
            </div>

            <?php
                if (is_active_sidebar('sidebar-1')): ?>
                <div class="widget-area" style="margin-bottom: 20px;">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>