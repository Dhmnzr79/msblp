<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="page-header">
            <h1>Страница не найдена</h1>
        </div>
        
        <div class="page-content">
            <p>Извините, запрашиваемая страница не найдена. Возможно, она была перемещена или удалена.</p>
            <p><a href="<?php echo esc_url(home_url('/')); ?>" class="btn">Вернуться на главную</a></p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
