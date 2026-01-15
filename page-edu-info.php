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

$edu_list_items = '';
if ($root_id) {
	$edu_list_items = wp_list_pages(array(
		'title_li' => '',
		'child_of' => (int) $root_id,
		'depth' => 1,
		'sort_column' => 'menu_order,post_title',
		'echo' => 0,
	));
	$edu_list_items = trim($edu_list_items);
}
?>

<main id="primary" class="site-main">
	<section class="section page-section">
		<div class="container">

			<!-- Навигация по разделу: десктоп (простой список) -->
			<nav class="edu-info-nav edu-info-nav--desktop" aria-label="Навигация по разделу «Сведения об образовательной организации»">
				<?php if ($edu_list_items) : ?>
					<ul class="edu-info-nav__list">
						<?php echo $edu_list_items; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
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
					<?php if ($edu_list_items) : ?>
						<ul class="edu-info-nav__list">
							<?php echo $edu_list_items; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</ul>
					<?php else : ?>
						<p class="edu-info-nav__notice">
							Навигация появится после создания и публикации дочерних страниц у страницы «Сведения об образовательной организации».
						</p>
					<?php endif; ?>
				</nav>
			</details>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<header class="page-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>

					<div class="page-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();


