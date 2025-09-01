<?php
/*
Template Name: Страница-заглушка
*/

get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- Секция заглушки -->
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <div class="coming-soon-icon">
                    <svg width="120" height="120" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0084FE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="#0084FE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="#0084FE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <h1 class="coming-soon-title">Идет наполнение контентом</h1>
                
                <p class="coming-soon-description">
                    Мы активно работаем над наполнением этой страницы интересным и полезным контентом. 
                    Скоро здесь появится актуальная информация о наших программах обучения.
                </p>
                
                <div class="coming-soon-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#25D366" stroke-width="2"/>
                            </svg>
                        </div>
                        <span>Экспертные материалы</span>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#25D366" stroke-width="2"/>
                            </svg>
                        </div>
                        <span>Практические кейсы</span>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#25D366" stroke-width="2"/>
                            </svg>
                        </div>
                        <span>Интерактивные элементы</span>
                    </div>
                </div>
                
                <div class="coming-soon-actions">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <span class="btn-text">Вернуться на главную</span>
                        <svg class="btn-arrow" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    
                    <a href="#contact" class="btn btn-outline">
                        <span class="btn-text">Связаться с нами</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
