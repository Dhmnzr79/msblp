<?php
/**
 * Template Name: Сведения об образовательной организации (Приказ №1493)
 *
 * Универсальный шаблон для раздела "Сведения об образовательной организации".
 * Требования:
 * - Только Pages (никаких Posts/CPT)
 * - Один шаблон на весь раздел
 * - HTML-контент через the_content()
 * - Боковая навигация должна быть на каждой странице раздела
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

/**
 * Найти дочернюю страницу по заголовку строго внутри корневой страницы раздела.
 */
function msblp_find_child_page_id_by_title($root_id, $title) {
	$page = get_page_by_title($title, OBJECT, 'page');
	if (!$page) {
		return 0;
	}
	if ((int) $page->post_parent !== (int) $root_id) {
		return 0;
	}
	return (int) $page->ID;
}

global $post;
$root_id = $post ? msblp_get_top_ancestor_id($post->ID) : 0;

// 13 обязательных страниц раздела (в требуемом порядке).
$edu_items = array(
	'Основные сведения',
	'Структура и органы управления образовательной организацией',
	'Документы',
	'Образование',
	'Руководство',
	'Педагогический состав',
	'Материально-техническое обеспечение и оснащённость образовательного процесса. Доступная среда',
	'Платные образовательные услуги',
	'Финансово-хозяйственная деятельность',
	'Вакантные места для приёма (перевода) обучающихся',
	'Стипендии и меры поддержки обучающихся',
	'Международное сотрудничество',
	'Организация питания в образовательной организации',
);
?>

<main id="primary" class="site-main">
	<section class="section page-section">
		<div class="container">
			<div class="grid grid-12">
				<aside class="grid-col-3">
					<nav class="edu-info-nav" aria-label="Сведения об образовательной организации">
						<ul class="edu-info-nav__list">
							<?php foreach ($edu_items as $item_title) : ?>
								<?php
								$item_id = $root_id ? msblp_find_child_page_id_by_title($root_id, $item_title) : 0;
								$is_active = $post && $item_id && ((int) $post->ID === (int) $item_id);
								$url = $item_id ? get_permalink($item_id) : '';
								?>
								<li class="edu-info-nav__item<?php echo $is_active ? ' is-active' : ''; ?>">
									<?php if ($url) : ?>
										<a class="edu-info-nav__link" href="<?php echo esc_url($url); ?>">
											<?php echo esc_html($item_title); ?>
										</a>
									<?php else : ?>
										<span class="edu-info-nav__link edu-info-nav__link--disabled">
											<?php echo esc_html($item_title); ?>
										</span>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</aside>

				<div class="grid-col-9">
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
			</div>
		</div>
	</section>
</main>

<?php
get_footer();


