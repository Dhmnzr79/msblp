<?php
/**
 * Template Name: Сведения об образовательной организации (Приказ №1493)
 *
 * Универсальный шаблон для раздела "Сведения об образовательной организации".
 * Требования:
 * - Только Pages (никаких Posts/CPT)
 * - Один шаблон на весь раздел
 * - HTML-контент через the_content()
 * - Внутренняя навигация по дочерним страницам на каждой странице раздела
 * - Без бокового меню, без JS, максимально просто
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

/**
 * Получить верхнего родителя (корневую страницу раздела).
 */
function msblp_get_top_ancestor_id($post_id) {
	$ancestors = get_post_ancestors($post_id);
	if (empty($ancestors)) {
		return $post_id;
	}
	return (int) end($ancestors);
}

global $post;
$root_id = $post ? msblp_get_top_ancestor_id($post->ID) : 0;
// Пытаемся привязаться именно к корневой странице раздела по названию.
// Это защищает от ситуации, когда меню ведёт на одну из дочерних страниц,
// или страницы пока созданы без правильного родителя.
$edu_root_page = get_page_by_title('Сведения об образовательной организации', OBJECT, 'page');
if ($edu_root_page && (int) $edu_root_page->ID > 0) {
	$root_id = (int) $edu_root_page->ID;
}

$edu_pages = array();
if ($root_id) {
	$edu_pages = get_pages(array(
		'parent' => (int) $root_id,
		'sort_column' => 'menu_order,post_title',
		'sort_order' => 'ASC',
		'post_status' => 'publish',
	));
}

$current_id = ($post && isset($post->ID)) ? (int) $post->ID : 0;
$is_root_page = ($root_id && $current_id && ((int) $root_id === (int) $current_id));
$first_child_id = (!empty($edu_pages) && isset($edu_pages[0]->ID)) ? (int) $edu_pages[0]->ID : 0;
$active_id = ($is_root_page && $first_child_id) ? $first_child_id : $current_id;
$display_post = ($is_root_page && $first_child_id) ? get_post($first_child_id) : $post;

function msblp_render_edu_nav_items($pages, $active_id) {
	if (empty($pages)) {
		return;
	}
	foreach ($pages as $p) {
		$is_active = ((int) $active_id === (int) $p->ID);
		echo '<li class="edu-info-nav__item' . ($is_active ? ' is-active' : '') . '">';
		echo '<a class="edu-info-nav__link" href="' . esc_url(get_permalink($p->ID)) . '"' . ($is_active ? ' aria-current="page"' : '') . '>';
		echo esc_html(get_the_title($p->ID));
		echo '</a>';
		echo '</li>';
	}
}
?>

<main id="primary" class="site-main">
	<section class="section page-section">
		<div class="container">
			<div class="edu-info-layout">
				<aside class="edu-info-aside">
					<!-- Навигация по разделу: десктоп (вертикальный список) -->
					<nav class="edu-info-nav edu-info-nav--desktop" aria-label="Навигация по разделу «Сведения об образовательной организации»">
						<?php if (!empty($edu_pages)) : ?>
							<ul class="edu-info-nav__list">
								<?php msblp_render_edu_nav_items($edu_pages, $active_id); ?>
							</ul>
						<?php else : ?>
							<p class="edu-info-nav__notice">
								Навигация появится после создания и публикации дочерних страниц у страницы «Сведения об образовательной организации».
							</p>
						<?php endif; ?>
					</nav>

					<!-- Навигация по разделу: мобилка (details/summary без JS) -->
					<details class="edu-info-nav edu-info-nav--mobile">
						<summary class="edu-info-nav__summary">Навигация по разделу</summary>
						<nav class="edu-info-nav__panel" aria-label="Навигация по разделу «Сведения об образовательной организации»">
							<?php if (!empty($edu_pages)) : ?>
								<ul class="edu-info-nav__list">
									<?php msblp_render_edu_nav_items($edu_pages, $active_id); ?>
								</ul>
							<?php else : ?>
								<p class="edu-info-nav__notice">
									Навигация появится после создания и публикации дочерних страниц у страницы «Сведения об образовательной организации».
								</p>
							<?php endif; ?>
						</nav>
					</details>
				</aside>

				<div class="edu-info-main">
					<?php if ($display_post) : ?>
						<?php
						$original_post = $post;
						$post = $display_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
						setup_postdata($post);
						?>
						<header class="page-header">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</header>

						<div class="page-content">
							<?php the_content(); ?>
						</div>

						<?php
						wp_reset_postdata();
						$post = $original_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
						?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();


