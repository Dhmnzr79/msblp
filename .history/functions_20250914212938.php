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

/**
 * Подключение скриптов и стилей
 */
function psych_school_enqueue_scripts() {
    // Подключение WhatsApp виджета
    wp_enqueue_script('whatsapp-widget', get_template_directory_uri() . '/assets/js/whatsapp-widget.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'psych_school_enqueue_scripts');

/**
 * Перенаправление на страницу-заглушку для всех страниц кроме главной
 */
function psych_school_redirect_to_coming_soon() {
    // Не перенаправляем на главной странице
    if (is_front_page() || is_home()) {
        return;
    }
    
    // Не перенаправляем если это уже страница-заглушка
    if (is_page_template('page-coming-soon.php')) {
        return;
    }
    
    // Не перенаправляем для администраторов
    if (current_user_can('manage_options')) {
        return;
    }
    
    // Перенаправляем на страницу-заглушку
    $coming_soon_page = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-coming-soon.php',
        'numberposts' => 1
    ));
    
    if (!empty($coming_soon_page)) {
        wp_redirect(get_permalink($coming_soon_page[0]->ID));
        exit;
    }
}
// Временно отключаем перенаправление для тестирования
// add_action('template_redirect', 'psych_school_redirect_to_coming_soon');

/**
 * Показываем страницу-заглушку для всех страниц кроме главной
 */
function psych_school_show_coming_soon() {
    // Не показываем заглушку на главной странице
    if (is_front_page() || is_home()) {
        return;
    }
    
    // Не показываем заглушку для администраторов
    if (current_user_can('manage_options')) {
        return;
    }
    
    // Показываем страницу-заглушку
    include(get_template_directory() . '/page-coming-soon.php');
    exit;
}
add_action('template_redirect', 'psych_school_show_coming_soon');

/**
 * Обработка формы обратной связи
 */
function psych_school_handle_contact_form() {
    // Проверяем, что это AJAX запрос и форма обратной связи
    if (!wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
        wp_die('Ошибка безопасности');
    }

    // Получаем данные формы
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    $email = sanitize_email($_POST['email'] ?? '');

    // Валидация
    $errors = array();
    
    if (empty($name)) {
        $errors[] = 'Имя обязательно для заполнения';
    }
    
    if (empty($message)) {
        $errors[] = 'Сообщение обязательно для заполнения';
    }
    
    if (!empty($email) && !is_email($email)) {
        $errors[] = 'Неверный формат email';
    }

    // Если есть ошибки, возвращаем их
    if (!empty($errors)) {
        wp_send_json_error(array(
            'message' => implode(', ', $errors)
        ));
    }

    // Отправляем email
    $to = get_option('psych_school_contact_email') ?: get_option('admin_email');
    $subject = 'Новое сообщение с сайта ' . get_bloginfo('name');
    
    $email_message = "Новое сообщение с сайта:\n\n";
    $email_message .= "Имя: " . $name . "\n";
    $email_message .= "Телефон: " . $phone . "\n";
    if (!empty($email)) {
        $email_message .= "Email: " . $email . "\n";
    }
    $email_message .= "Сообщение:\n" . $message . "\n\n";
    $email_message .= "Дата: " . current_time('d.m.Y H:i') . "\n";
    $email_message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $email_message, $headers);

    if ($sent) {
        // Отправляем автоответ пользователю
        if (!empty($email)) {
            $user_subject = 'Ваше сообщение получено - ' . get_bloginfo('name');
            $user_message = "Здравствуйте, " . $name . "!\n\n";
            $user_message .= "Спасибо за ваше сообщение. Мы получили его и свяжемся с вами в ближайшее время.\n\n";
            $user_message .= "Ваше сообщение:\n" . $message . "\n\n";
            $user_message .= "С уважением,\n";
            $user_message .= "Команда " . get_bloginfo('name');
            
            wp_mail($email, $user_subject, $user_message, $headers);
        }

        wp_send_json_success(array(
            'message' => 'Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.'
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Произошла ошибка при отправке сообщения. Попробуйте позже.'
        ));
    }
}

// AJAX обработчики
add_action('wp_ajax_contact_form', 'psych_school_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'psych_school_handle_contact_form');

/**
 * Добавляем nonce для форм в head
 */
function psych_school_add_form_nonce() {
    echo '<script type="text/javascript">';
    echo 'var contactFormAjax = {';
    echo '    "ajaxurl": "' . admin_url('admin-ajax.php') . '",';
    echo '    "nonce": "' . wp_create_nonce('contact_form_nonce') . '"';
    echo '};';
    echo '</script>';
}
add_action('wp_head', 'psych_school_add_form_nonce');

/**
 * Добавляем аналитику в head
 */
function psych_school_add_analytics() {
    $google_analytics_id = get_option('psych_school_google_analytics_id', '');
    $yandex_metrika_id = get_option('psych_school_yandex_metrika_id', '');
    
    if (!empty($google_analytics_id)) {
        echo "<!-- Google Analytics -->\n";
        echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . esc_attr($google_analytics_id) . "\"></script>\n";
        echo "<script>\n";
        echo "  window.dataLayer = window.dataLayer || [];\n";
        echo "  function gtag(){dataLayer.push(arguments);}\n";
        echo "  gtag('js', new Date());\n";
        echo "  gtag('config', '" . esc_js($google_analytics_id) . "', {\n";
        echo "    'anonymize_ip': true,\n";
        echo "    'cookie_flags': 'SameSite=None;Secure'\n";
        echo "  });\n";
        echo "</script>\n";
    }
    
    if (!empty($yandex_metrika_id)) {
        echo "<!-- Yandex.Metrika counter -->\n";
        echo "<script type=\"text/javascript\" >\n";
        echo "(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};\n";
        echo "m[i].l=1*new Date();\n";
        echo "for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}\n";
        echo "k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})\n";
        echo "(window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");\n";
        echo "ym(" . esc_js($yandex_metrika_id) . ", \"init\", {\n";
        echo "  clickmap:true,\n";
        echo "  trackLinks:true,\n";
        echo "  accurateTrackBounce:true,\n";
        echo "  webvisor:true\n";
        echo "});\n";
        echo "</script>\n";
        echo "<noscript><div><img src=\"https://mc.yandex.ru/watch/" . esc_attr($yandex_metrika_id) . "\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>\n";
    }
}
add_action('wp_head', 'psych_school_add_analytics');

/**
 * Настройки темы в админке
 */
function psych_school_admin_menu() {
    add_theme_page(
        'Настройки темы',
        'Настройки темы',
        'manage_options',
        'psych-school-settings',
        'psych_school_settings_page'
    );
}
add_action('admin_menu', 'psych_school_admin_menu');

/**
 * Страница настроек темы
 */
function psych_school_settings_page() {
    if (isset($_POST['submit'])) {
        update_option('psych_school_google_analytics_id', sanitize_text_field($_POST['google_analytics_id']));
        update_option('psych_school_yandex_metrika_id', sanitize_text_field($_POST['yandex_metrika_id']));
        update_option('psych_school_contact_email', sanitize_email($_POST['contact_email']));
        update_option('psych_school_contact_phone', sanitize_text_field($_POST['contact_phone']));
        update_option('psych_school_contact_address', sanitize_text_field($_POST['contact_address']));
        echo '<div class="notice notice-success"><p>Настройки сохранены!</p></div>';
    }
    
    $google_analytics_id = get_option('psych_school_google_analytics_id', '');
    $yandex_metrika_id = get_option('psych_school_yandex_metrika_id', '');
    $contact_email = get_option('psych_school_contact_email', '');
    $contact_phone = get_option('psych_school_contact_phone', '');
    $contact_address = get_option('psych_school_contact_address', '');
    ?>
    <div class="wrap">
        <h1>Настройки темы</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th scope="row">Google Analytics ID</th>
                    <td>
                        <input type="text" name="google_analytics_id" value="<?php echo esc_attr($google_analytics_id); ?>" class="regular-text" />
                        <p class="description">Введите ID Google Analytics (например: G-XXXXXXXXXX)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Яндекс.Метрика ID</th>
                    <td>
                        <input type="text" name="yandex_metrika_id" value="<?php echo esc_attr($yandex_metrika_id); ?>" class="regular-text" />
                        <p class="description">Введите ID Яндекс.Метрики (например: 12345678)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Email для связи</th>
                    <td>
                        <input type="email" name="contact_email" value="<?php echo esc_attr($contact_email); ?>" class="regular-text" />
                        <p class="description">Email для получения сообщений с формы обратной связи</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Телефон</th>
                    <td>
                        <input type="text" name="contact_phone" value="<?php echo esc_attr($contact_phone); ?>" class="regular-text" />
                        <p class="description">Контактный телефон</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Адрес</th>
                    <td>
                        <input type="text" name="contact_address" value="<?php echo esc_attr($contact_address); ?>" class="regular-text" />
                        <p class="description">Адрес организации</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/**
 * Добавляем schema markup для SEO
 */
function psych_school_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "EducationalOrganization",
            "name" => get_bloginfo('name'),
            "description" => get_bloginfo('description'),
            "url" => home_url('/'),
            "logo" => get_template_directory_uri() . '/assets/svg/logo.svg',
            "address" => array(
                "@type" => "PostalAddress",
                "streetAddress" => get_option('psych_school_contact_address', ''),
                "addressLocality" => "Москва",
                "addressCountry" => "RU"
            ),
            "contactPoint" => array(
                "@type" => "ContactPoint",
                "telephone" => get_option('psych_school_contact_phone', ''),
                "contactType" => "customer service",
                "availableLanguage" => "Russian"
            ),
            "sameAs" => array(
                // Добавьте ссылки на социальные сети, если есть
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'psych_school_add_schema_markup');

/**
 * Добавляем мета-теги для SEO
 */
function psych_school_add_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="Высшая школа бизнес-психологии и международного лидерства им. Антонио Менегетти. Программы обучения, консультирование, развитие лидерских качеств.">' . "\n";
        echo '<meta name="keywords" content="бизнес-психология, лидерство, обучение, психология, менеджмент, коучинг, консультирование">' . "\n";
        echo '<meta property="og:title" content="' . get_bloginfo('name') . '">' . "\n";
        echo '<meta property="og:description" content="Высшая школа бизнес-психологии и международного лидерства им. Антонио Менегетти">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . home_url('/') . '">' . "\n";
        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/main-bg.jpg">' . "\n";
        echo '<meta property="og:site_name" content="' . get_bloginfo('name') . '">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . get_bloginfo('name') . '">' . "\n";
        echo '<meta name="twitter:description" content="Высшая школа бизнес-психологии и международного лидерства им. Антонио Менегетти">' . "\n";
        echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/assets/images/main-bg.jpg">' . "\n";
    }
}
add_action('wp_head', 'psych_school_add_meta_tags');

/**
 * Добавляем каноническую ссылку
 */
function psych_school_add_canonical() {
    if (is_front_page()) {
        echo '<link rel="canonical" href="' . home_url('/') . '">' . "\n";
    }
}
add_action('wp_head', 'psych_school_add_canonical');
