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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission01.png" alt="Курс креативных трансформаций" />
                        </div>

                        <!-- Правая колонка (контент) -->
                        <div class="about-content">
                            <h2>Курс креативных трансформаций по онтопсихологии</h2>
                            <p>Авторский курс, направленный на глубинную трансформацию личности через призму онтопсихологии. Это путешествие к себе настоящему, раскрытие творческого потенциала и обретение внутренней силы.</p>
                            
                            <p>Курс построен на фундаментальных принципах онтопсихологии Антонио Менегетти и интегрирует современные методы работы с сознанием, креативностью и лидерским потенциалом.</p>
                            
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

