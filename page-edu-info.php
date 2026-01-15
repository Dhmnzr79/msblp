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

$edu_pages = array();
if ($root_id) {
	$edu_pages = get_pages(array(
		'parent' => (int) $root_id,
		'sort_column' => 'menu_order,post_title',
		'sort_order' => 'ASC',
		'post_status' => 'publish',
	));
}

function msblp_render_edu_nav_list($pages, $current_id) {
	if (empty($pages)) {
		return;
	}
	?>
	<ul class="edu-info-nav__list">
		<?php foreach ($pages as $p) : ?>
			<?php $is_active = ((int) $current_id === (int) $p->ID); ?>
			<li class="edu-info-nav__item<?php echo $is_active ? ' is-active' : ''; ?>">
				<a class="edu-info-nav__link" href="<?php echo esc_url(get_permalink($p->ID)); ?>"<?php echo $is_active ? ' aria-current="page"' : ''; ?>>
					<?php echo esc_html(get_the_title($p->ID)); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php
}
?>

<main id="primary" class="site-main">
	<section class="section page-section">
		<div class="container">

			<!-- Навигация по разделу: десктоп (простой список) -->
			<nav class="edu-info-nav edu-info-nav--desktop" aria-label="Навигация по разделу «Сведения об образовательной организации»">
				<?php msblp_render_edu_nav_list($edu_pages, $post ? $post->ID : 0); ?>
			</nav>

			<!-- Навигация по разделу: мобилка (details/summary без JS) -->
			<details class="edu-info-nav edu-info-nav--mobile">
				<summary class="edu-info-nav__summary">Навигация по разделу</summary>
				<nav class="edu-info-nav__panel" aria-label="Навигация по разделу «Сведения об образовательной организации»">
					<?php msblp_render_edu_nav_list($edu_pages, $post ? $post->ID : 0); ?>
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


