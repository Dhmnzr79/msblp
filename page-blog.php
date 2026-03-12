<?php
/**
 * Template Name: Статьи
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="blog-layout">

            <nav class="breadcrumbs" aria-label="<?php esc_attr_e('Хлебные крошки', 'psych-school'); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Главная', 'psych-school'); ?></a>
                <span class="breadcrumbs-separator">/</span>
                <span class="breadcrumbs-current"><?php esc_html_e('Статьи', 'psych-school'); ?></span>
            </nav>

            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <?php
            $blog_query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            ));

            if ($blog_query->have_posts()) : ?>
                <div class="blog-grid">
                    <?php
                    while ($blog_query->have_posts()) :
                        $blog_query->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="blog-card-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="blog-card-body">
                                <h2 class="blog-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="blog-card-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                                <a class="blog-card-link" href="<?php the_permalink(); ?>">
                                    <?php esc_html_e('Читать далее', 'psych-school'); ?>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="blog-pagination">
                    <?php
                    echo paginate_links(array(
                        'total'   => $blog_query->max_num_pages,
                        'mid_size'=> 1,
                        'prev_text' => __('« Назад', 'psych-school'),
                        'next_text' => __('Вперёд »', 'psych-school'),
                    ));
                    ?>
                </div>

                <?php
                wp_reset_postdata();
            else :
                ?>
                <p><?php esc_html_e('Пока нет опубликованных статей.', 'psych-school'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();

