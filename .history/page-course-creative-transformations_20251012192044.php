<?php
/**
 * Template Name: Курс креативных трансформаций
 */

get_header(); ?>

<main id="primary" class="site-main">
    <section class="section page-section">
        <div class="container">
            <div class="page-content">
                <!-- Первый блок: Сетка #2 (две равные колонки) -->
                <div class="content-block">
                    <div class="grid grid-2">
                        <!-- Левая колонка (изображение) -->
                        <div class="about-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kurs-bg-1.jpg" alt="Курс креативных трансформаций" />
                        </div>

                        <!-- Правая колонка (контент) -->
                        <div class="about-content">
                            <h2>Курс креативных трансформаций по онтологии</h2>
                            <p>В основе Коучинга Креативных Трансформаций лежит понимание, что при решении любой проблемы в личной жизни и в бизнесе, при любых изменениях и кризисах, необходимо опираться на внутренний критерий (мудрость психики), поскольку оптимальное решение, цель развития и шаги к цели уже содержатся в креативном бессознательном предпринимателя - источнике интуиции, мудрости и оптимальных решений.</p>
                            
                            <p>Проблемы, кризисы, потери возникают тогда, когда человек теряет связь со своим креативным бессознательным (или «Высшим Я»), ориентируется на общепринятые ценности, убеждения, правила. Коучинг креативных трансформаций позволяет человеку восстановить контакт со своим «Высшим Я» - критерием непогрешимости, неисчерпаемым источником мудрости и ресурсов.</p>
                            
                            <button class="btn">
                                <span class="btn-text">Записаться на курс</span>
                                <svg class="btn-arrow" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>


