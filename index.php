<?php
/**
 * Главный шаблон
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        
        <?php if (have_posts()) : ?>
            
            <header class="page-header">
                <?php if (is_home() && !is_front_page()) : ?>
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                <?php elseif (is_search()) : ?>
                    <h1 class="page-title">
                        <?php printf(esc_html__('Результаты поиска для: %s', 'psych-school'), '<span>' . get_search_query() . '</span>'); ?>
                    </h1>
                <?php elseif (is_archive()) : ?>
                    <h1 class="page-title"><?php the_archive_title(); ?></h1>
                    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                <?php endif; ?>
            </header>

            <div class="posts-grid">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <header class="entry-header">
                                <?php
                                if (is_singular()) :
                                    the_title('<h1 class="entry-title">', '</h1>');
                                else :
                                    the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                                endif;
                                ?>
                                
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <i class="icon-calendar"></i>
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                    </span>
                                    
                                    <?php if (has_category()) : ?>
                                        <span class="categories">
                                            <i class="icon-folder"></i>
                                            <?php the_category(', '); ?>
                                        </span>
                                    <?php endif; ?>
                                    
                                    <span class="author">
                                        <i class="icon-user"></i>
                                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                            <?php the_author(); ?>
                                        </a>
                                    </span>
                                </div>
                            </header>

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e('Читать далее', 'psych-school'); ?>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </footer>
                        </div>
                        
                    </article>

                <?php endwhile; ?>
            </div>

            <?php
            // Пагинация
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="icon-arrow-left"></i> ' . __('Предыдущая', 'psych-school'),
                'next_text' => __('Следующая', 'psych-school') . ' <i class="icon-arrow-right"></i>',
            ));
            ?>

        <?php else : ?>
            
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('Ничего не найдено', 'psych-school'); ?></h1>
                </header>

                <div class="page-content">
                    <?php if (is_search()) : ?>
                        <p><?php esc_html_e('Извините, но ничего не соответствует вашим критериям поиска. Попробуйте снова с другими ключевыми словами.', 'psych-school'); ?></p>
                        <?php get_search_form(); ?>
                    <?php elseif (is_home() && current_user_can('publish_posts')) : ?>
                        <p>
                            <?php
                            printf(
                                wp_kses(
                                    __('Готовы опубликовать свою первую запись? <a href="%1$s">Начните здесь</a>.', 'psych-school'),
                                    array(
                                        'a' => array(
                                            'href' => array(),
                                        ),
                                    )
                                ),
                                esc_url(admin_url('post-new.php'))
                            );
                            ?>
                        </p>
                    <?php else : ?>
                        <p><?php esc_html_e('Похоже, мы не можем найти то, что вы ищете. Возможно, поиск поможет.', 'psych-school'); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </section>

        <?php endif; ?>
        
    </div>
</main>

<?php
get_sidebar();
get_footer();


