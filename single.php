<?php
/**
 * Шаблон отдельной статьи
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="blog-layout blog-layout--narrow">

            <nav class="breadcrumbs" aria-label="<?php esc_attr_e('Хлебные крошки', 'psych-school'); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Главная', 'psych-school'); ?></a>
                <span class="breadcrumbs-separator">/</span>
                <a href="<?php echo esc_url(psych_school_get_page_url_by_template('page-blog.php')); ?>">
                    <?php esc_html_e('Статьи', 'psych-school'); ?>
                </a>
                <span class="breadcrumbs-separator">/</span>
                <span class="breadcrumbs-current"><?php the_title(); ?></span>
            </nav>

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single-article-thumb">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <header class="single-article-header">
                            <h1 class="single-article-title"><?php the_title(); ?></h1>
                        </header>

                        <div class="single-article-content">
                            <?php the_content(); ?>
                        </div>

                        <footer class="single-article-footer">
                            <a class="single-article-back" href="<?php echo esc_url(psych_school_get_page_url_by_template('page-blog.php')); ?>">
                                <?php esc_html_e('← Вернуться к статьям', 'psych-school'); ?>
                            </a>
                        </footer>
                    </article>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();

