<?php
/**
 * Функции темы Психологическая Школа
 */

// Предотвращаем прямой доступ
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Настройка темы
 */
function psych_school_setup() {
    // Поддержка переводов
    load_theme_textdomain('psych-school', get_template_directory() . '/languages');
    
    // Поддержка автоматических ссылок в RSS
    add_theme_support('automatic-feed-links');
    
    // Поддержка title tag
    add_theme_support('title-tag');
    
    // Поддержка миниатюр записей
    add_theme_support('post-thumbnails');
    
    // Поддержка HTML5 разметки
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Поддержка кастомного логотипа
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Поддержка кастомного фона
    add_theme_support('custom-background');
    
    // Поддержка кастомных цветов
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Основной синий', 'psych-school'),
            'slug'  => 'primary-blue',
            'color' => '#2C5AA0',
        ),
        array(
            'name'  => __('Оранжевый', 'psych-school'),
            'slug'  => 'orange',
            'color' => '#F39C12',
        ),
        array(
            'name'  => __('Красный', 'psych-school'),
            'slug'  => 'red',
            'color' => '#E74C3C',
        ),
        array(
            'name'  => __('Серый', 'psych-school'),
            'slug'  => 'gray',
            'color' => '#ECF0F1',
        ),
    ));
    
    // Регистрация меню
    register_nav_menus(array(
        'primary' => __('Главное меню', 'psych-school'),
        'footer'  => __('Меню в подвале', 'psych-school'),
    ));
}
add_action('after_setup_theme', 'psych_school_setup');

/**
 * Подключение стилей и скриптов
 */
function psych_school_scripts() {
    // Основные стили темы
    wp_enqueue_style('psych-school-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap', array(), null);
    
    // Основной скрипт темы
    wp_enqueue_script('psych-school-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    
    // Комментарии
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'psych_school_scripts');

/**
 * Регистрация сайдбаров
 */
function psych_school_widgets_init() {
    register_sidebar(array(
        'name'          => __('Сайдбар', 'psych-school'),
        'id'            => 'sidebar-1',
        'description'   => __('Добавьте виджеты сюда', 'psych-school'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Подвал 1', 'psych-school'),
        'id'            => 'footer-1',
        'description'   => __('Первый блок подвала', 'psych-school'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Подвал 2', 'psych-school'),
        'id'            => 'footer-2',
        'description'   => __('Второй блок подвала', 'psych-school'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Подвал 3', 'psych-school'),
        'id'            => 'footer-3',
        'description'   => __('Третий блок подвала', 'psych-school'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'psych_school_widgets_init');

/**
 * Кастомные типы записей
 */
function psych_school_custom_post_types() {
    // Программы обучения
    register_post_type('courses', array(
        'labels' => array(
            'name'               => __('Программы', 'psych-school'),
            'singular_name'      => __('Программа', 'psych-school'),
            'menu_name'          => __('Программы', 'psych-school'),
            'add_new'            => __('Добавить программу', 'psych-school'),
            'add_new_item'       => __('Добавить новую программу', 'psych-school'),
            'edit_item'          => __('Редактировать программу', 'psych-school'),
            'new_item'           => __('Новая программа', 'psych-school'),
            'view_item'          => __('Просмотреть программу', 'psych-school'),
            'search_items'       => __('Искать программы', 'psych-school'),
            'not_found'          => __('Программы не найдены', 'psych-school'),
            'not_found_in_trash' => __('В корзине программ не найдено', 'psych-school'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-welcome-learn-more',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'courses'),
    ));
    
    // Преподаватели
    register_post_type('teachers', array(
        'labels' => array(
            'name'               => __('Преподаватели', 'psych-school'),
            'singular_name'      => __('Преподаватель', 'psych-school'),
            'menu_name'          => __('Преподаватели', 'psych-school'),
            'add_new'            => __('Добавить преподавателя', 'psych-school'),
            'add_new_item'       => __('Добавить нового преподавателя', 'psych-school'),
            'edit_item'          => __('Редактировать преподавателя', 'psych-school'),
            'new_item'           => __('Новый преподаватель', 'psych-school'),
            'view_item'          => __('Просмотреть преподавателя', 'psych-school'),
            'search_items'       => __('Искать преподавателей', 'psych-school'),
            'not_found'          => __('Преподаватели не найдены', 'psych-school'),
            'not_found_in_trash' => __('В корзине преподавателей не найдено', 'psych-school'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'      => array('slug' => 'teachers'),
    ));
    
    // Отзывы
    register_post_type('testimonials', array(
        'labels' => array(
            'name'               => __('Отзывы', 'psych-school'),
            'singular_name'      => __('Отзыв', 'psych-school'),
            'menu_name'          => __('Отзывы', 'psych-school'),
            'add_new'            => __('Добавить отзыв', 'psych-school'),
            'add_new_item'       => __('Добавить новый отзыв', 'psych-school'),
            'edit_item'          => __('Редактировать отзыв', 'psych-school'),
            'new_item'           => __('Новый отзыв', 'psych-school'),
            'view_item'          => __('Просмотреть отзыв', 'psych-school'),
            'search_items'       => __('Искать отзывы', 'psych-school'),
            'not_found'          => __('Отзывы не найдены', 'psych-school'),
            'not_found_in_trash' => __('В корзине отзывов не найдено', 'psych-school'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array('title', 'editor', 'thumbnail'),
        'rewrite'      => array('slug' => 'testimonials'),
    ));
}
add_action('init', 'psych_school_custom_post_types');

/**
 * Кастомные таксономии
 */
function psych_school_custom_taxonomies() {
    // Категории для программ
    register_taxonomy('course_category', 'courses', array(
        'labels' => array(
            'name'              => __('Категории программ', 'psych-school'),
            'singular_name'     => __('Категория программы', 'psych-school'),
            'search_items'      => __('Искать категории', 'psych-school'),
            'all_items'         => __('Все категории', 'psych-school'),
            'parent_item'       => __('Родительская категория', 'psych-school'),
            'parent_item_colon' => __('Родительская категория:', 'psych-school'),
            'edit_item'         => __('Редактировать категорию', 'psych-school'),
            'update_item'       => __('Обновить категорию', 'psych-school'),
            'add_new_item'      => __('Добавить новую категорию', 'psych-school'),
            'new_item_name'     => __('Название новой категории', 'psych-school'),
            'menu_name'         => __('Категории', 'psych-school'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'course-category'),
    ));
}
add_action('init', 'psych_school_custom_taxonomies');

/**
 * Ограничение длины отрывка
 */
function psych_school_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'psych_school_excerpt_length');

/**
 * Изменение окончания отрывка
 */
function psych_school_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'psych_school_excerpt_more');

/**
 * Добавление поддержки SVG
 */
function psych_school_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'psych_school_mime_types');

/**
 * Fallback меню
 */
function psych_school_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Главная</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">О школе</a></li>';
    echo '<li><a href="' . esc_url(home_url('/courses')) . '">Программы</a></li>';
    echo '<li><a href="' . esc_url(home_url('/teachers')) . '">Преподаватели</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Контакты</a></li>';
    echo '</ul>';
}

/**
 * Безопасность
 */
function psych_school_security() {
    // Удаляем версию WordPress
    remove_action('wp_head', 'wp_generator');
    
    // Отключаем XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Скрываем ошибки входа
    add_filter('login_errors', function() {
        return 'Ошибка входа';
    });
}
add_action('init', 'psych_school_security');

/**
 * Кастомный тип записи для преподавателей
 */
function psych_school_teachers_post_type() {
    register_post_type('teachers', array(
        'labels' => array(
            'name'               => __('Преподаватели', 'psych-school'),
            'singular_name'      => __('Преподаватель', 'psych-school'),
            'menu_name'          => __('Преподаватели', 'psych-school'),
            'add_new'            => __('Добавить преподавателя', 'psych-school'),
            'add_new_item'       => __('Добавить нового преподавателя', 'psych-school'),
            'edit_item'          => __('Редактировать преподавателя', 'psych-school'),
            'new_item'           => __('Новый преподаватель', 'psych-school'),
            'view_item'          => __('Просмотреть преподавателя', 'psych-school'),
            'search_items'       => __('Искать преподавателей', 'psych-school'),
            'not_found'          => __('Преподаватели не найдены', 'psych-school'),
            'not_found_in_trash' => __('В корзине преподавателей не найдено', 'psych-school'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => array('title', 'editor', 'thumbnail'),
        'rewrite'      => array('slug' => 'teachers'),
    ));
}
add_action('init', 'psych_school_teachers_post_type');

/**
 * Мета-поля для преподавателей
 */
function psych_school_teachers_meta_boxes() {
    add_meta_box(
        'teacher_details',
        __('Детали преподавателя', 'psych-school'),
        'psych_school_teacher_meta_box_callback',
        'teachers',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'psych_school_teachers_meta_boxes');

/**
 * Callback для мета-полей преподавателя
 */
function psych_school_teacher_meta_box_callback($post) {
    wp_nonce_field('psych_school_teacher_meta_box', 'psych_school_teacher_meta_box_nonce');
    
    $short_description = get_post_meta($post->ID, '_teacher_short_description', true);
    $position = get_post_meta($post->ID, '_teacher_position', true);
    $show_in_slider = get_post_meta($post->ID, '_teacher_show_in_slider', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="teacher_position"><?php _e('Должность', 'psych-school'); ?></label>
            </th>
            <td>
                <input type="text" id="teacher_position" name="teacher_position" value="<?php echo esc_attr($position); ?>" style="width: 100%;" />
                <p class="description"><?php _e('Должность преподавателя (например: "Руководитель школы", "Старший преподаватель")', 'psych-school'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="teacher_short_description"><?php _e('Краткое описание для слайдера', 'psych-school'); ?></label>
            </th>
            <td>
                <textarea id="teacher_short_description" name="teacher_short_description" rows="3" cols="50" style="width: 100%;"><?php echo esc_textarea($short_description); ?></textarea>
                <p class="description"><?php _e('Краткое описание, которое будет отображаться в слайдере (максимум 150 символов)', 'psych-school'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="teacher_show_in_slider"><?php _e('Отображать в слайдере', 'psych-school'); ?></label>
            </th>
            <td>
                <input type="checkbox" id="teacher_show_in_slider" name="teacher_show_in_slider" value="1" <?php checked($show_in_slider, '1'); ?> />
                <label for="teacher_show_in_slider"><?php _e('Показывать этого преподавателя в слайдере на главной странице', 'psych-school'); ?></label>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Сохранение мета-полей преподавателя
 */
function psych_school_save_teacher_meta($post_id) {
    if (!isset($_POST['psych_school_teacher_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['psych_school_teacher_meta_box_nonce'], 'psych_school_teacher_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['teacher_position'])) {
        update_post_meta($post_id, '_teacher_position', sanitize_text_field($_POST['teacher_position']));
    }
    
    if (isset($_POST['teacher_short_description'])) {
        update_post_meta($post_id, '_teacher_short_description', sanitize_textarea_field($_POST['teacher_short_description']));
    }
    
    $show_in_slider = isset($_POST['teacher_show_in_slider']) ? '1' : '0';
    update_post_meta($post_id, '_teacher_show_in_slider', $show_in_slider);
}
add_action('save_post', 'psych_school_save_teacher_meta');

/**
 * Кастомный тип записи для отзывов
 */
function psych_school_testimonials_post_type() {
    register_post_type('testimonials', array(
        'labels' => array(
            'name'               => __('Отзывы', 'psych-school'),
            'singular_name'      => __('Отзыв', 'psych-school'),
            'menu_name'          => __('Отзывы', 'psych-school'),
            'add_new'            => __('Добавить отзыв', 'psych-school'),
            'add_new_item'       => __('Добавить новый отзыв', 'psych-school'),
            'edit_item'          => __('Редактировать отзыв', 'psych-school'),
            'new_item'           => __('Новый отзыв', 'psych-school'),
            'view_item'          => __('Просмотреть отзыв', 'psych-school'),
            'search_items'       => __('Искать отзывы', 'psych-school'),
            'not_found'          => __('Отзывы не найдены', 'psych-school'),
            'not_found_in_trash' => __('В корзине отзывов не найдено', 'psych-school'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array('title', 'editor', 'thumbnail'),
        'rewrite'      => array('slug' => 'testimonials'),
    ));
}
add_action('init', 'psych_school_testimonials_post_type');

/**
 * Мета-поля для отзывов
 */
function psych_school_testimonials_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Детали отзыва', 'psych-school'),
        'psych_school_testimonial_meta_box_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'psych_school_testimonials_meta_boxes');

/**
 * Callback для мета-полей отзыва
 */
function psych_school_testimonial_meta_box_callback($post) {
    wp_nonce_field('psych_school_testimonial_meta_box', 'psych_school_testimonial_meta_box_nonce');
    
    $author_name = get_post_meta($post->ID, '_testimonial_author_name', true);
    $show_in_slider = get_post_meta($post->ID, '_testimonial_show_in_slider', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="testimonial_author_name"><?php _e('Имя автора отзыва', 'psych-school'); ?></label>
            </th>
            <td>
                <input type="text" id="testimonial_author_name" name="testimonial_author_name" value="<?php echo esc_attr($author_name); ?>" class="regular-text" />
                <p class="description"><?php _e('Имя человека, который оставил отзыв', 'psych-school'); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="testimonial_show_in_slider"><?php _e('Отображать в слайдере', 'psych-school'); ?></label>
            </th>
            <td>
                <input type="checkbox" id="testimonial_show_in_slider" name="testimonial_show_in_slider" value="1" <?php checked($show_in_slider, '1'); ?> />
                <label for="testimonial_show_in_slider"><?php _e('Показывать этот отзыв в слайдере на главной странице', 'psych-school'); ?></label>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Сохранение мета-полей отзыва
 */
function psych_school_save_testimonial_meta($post_id) {
    if (!isset($_POST['psych_school_testimonial_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['psych_school_testimonial_meta_box_nonce'], 'psych_school_testimonial_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['testimonial_author_name'])) {
        update_post_meta($post_id, '_testimonial_author_name', sanitize_text_field($_POST['testimonial_author_name']));
    }
    
    $show_in_slider = isset($_POST['testimonial_show_in_slider']) ? '1' : '0';
    update_post_meta($post_id, '_testimonial_show_in_slider', $show_in_slider);
}
add_action('save_post', 'psych_school_save_testimonial_meta');
