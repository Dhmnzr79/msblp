<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Перейти к содержимому', 'psych-school'); ?></a>

    <header id="masthead" class="site-header">
        <!-- Первая строка шапки -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-content">
                    <!-- Контакты -->
                    <div class="header-contacts">
                        <div class="contact-item">
                            <i class="icon-location"></i>
                            <span>г. Москва, ул. Примерная, д. 123</span>
                        </div>
                        <div class="contact-item">
                            <i class="icon-email"></i>
                            <span>info@psych-school.ru</span>
                        </div>
                    </div>

                    <!-- Звонок и кнопка -->
                    <div class="header-call">
                        <div class="contact-item">
                            <i class="icon-phone"></i>
                            <span>+7 (999) 123-45-67</span>
                        </div>
                        <button type="button" class="btn-secondary">
                            <span class="btn-text">Бесплатная консультация</span>
                            <svg class="btn-arrow" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Вторая строка шапки -->
        <div class="header-main">
            <div class="container">
                <div class="header-content">
                    <!-- Логотип -->
                    <div class="site-branding">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo.svg" alt="Meneghetti School for Business Psychology and Leadership" class="logo">
                            <span class="logo-text">Meneghetti School for Business Psychology and Leadership</span>
                        </a>
                    </div>

                    <!-- Мобильные кнопки -->
                    <div class="header-actions">
                        <a class="btn-call" href="tel:+79991234567" aria-label="Позвонить">☎</a>
                        <button class="btn-menu" aria-haspopup="dialog" aria-controls="mobileNav" aria-expanded="false">
                            <span class="btn-menu__bars" aria-hidden="true"></span>
                            <span class="sr-only"><?php esc_html_e('Открыть меню', 'psych-school'); ?></span>
                        </button>
                    </div>

                    <!-- Главное меню -->
                    <nav id="site-navigation" class="main-navigation">
                        <ul class="nav-menu">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Главная</a></li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">О Школе</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Миссия, Цели, Задачи</a></li>
                                    <li><a href="#">Аудитория</a></li>
                                    <li><a href="#">Теория и методика</a></li>
                                    <li><a href="#">Интегральная онтопсихология</a></li>
                                    <li><a href="#">Как работает интегральная онтопсихология</a></li>
                                    <li><a href="#">Принципы (Наши приоритеты)</a></li>
                                    <li><a href="#">Основатели</a></li>
                                    <li><a href="#">Преподаватели</a></li>
                                    <li><a href="#">Сведения об образовательной организации</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">Программы</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Школа бизнес-психологии</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Интегральная онтопсихология в практике бизнеса. Курс для руководителей.</a></li>
                                            <li><a href="#">Forma mentis предпринимателя: ключевые факторы успеха.</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Школа интегральной онтопсихологии</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Интегральная онтопсихология: теория и практика.</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Школа лидерства</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">«Метафизика и практика лидерства». Семинар-резиденс.</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><a href="#">Расписание</a></li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">Консультирование</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Индивидуальное консультирование и коучинг</a></li>
                                    <li><a href="#">Управленческий консалтинг и трекинг</a></li>
                                    <li><a href="#">Развивающие корпоративные мероприятия</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">Публикации</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Новости</a></li>
                                    <li><a href="#">Статьи</a></li>
                                    <li><a href="#">Исследования</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- OVERLAY + NAV -->
    <div class="nav-overlay" data-close></div>
    <aside id="mobileNav" class="mobile-nav" role="dialog" aria-modal="true" aria-label="Мобильное меню" aria-hidden="true">
        <div class="mobile-nav__header">
            <button class="nav-back" type="button" aria-label="Назад" hidden>← Назад</button>
            <div class="mobile-nav__title">Меню</div>
            <button class="nav-close" type="button" aria-label="Закрыть меню">✕</button>
        </div>

        <nav class="mobile-nav__scroller" aria-label="Основная навигация">
            <!-- ROOT (6 пунктов) -->
            <ul class="nav-panel" data-level="0" data-title="Меню" id="root">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Главная</a></li>
                <li><button class="nav-next" data-target="#about">О Школе</button></li>
                <li><button class="nav-next" data-target="#programs">Программы</button></li>
                <li><a href="#">Расписание</a></li>
                <li><button class="nav-next" data-target="#consulting">Консультирование</button></li>
                <li><button class="nav-next" data-target="#publications">Публикации</button></li>
            </ul>

            <!-- О Школе -->
            <ul class="nav-panel" id="about" data-level="1" data-title="О Школе" hidden>
                <li><a href="#">Миссия, Цели, Задачи</a></li>
                <li><a href="#">Аудитория</a></li>
                <li><a href="#">Теория и методика</a></li>
                <li><a href="#">Интегральная онтопсихология</a></li>
                <li><a href="#">Принципы (Наши приоритеты)</a></li>
                <li><a href="#">Основатели</a></li>
                <li><a href="#">Преподаватели</a></li>
                <li><a href="#">Сведения об образовательной организации</a></li>
            </ul>

            <!-- Программы -->
            <ul class="nav-panel" id="programs" data-level="1" data-title="Программы" hidden>
                <li><button class="nav-next" data-target="#bp">Школа бизнес-психологии</button></li>
                <li><button class="nav-next" data-target="#io">Школа интегральной онтопсихологии</button></li>
                <li><button class="nav-next" data-target="#leader">Школа лидерства</button></li>
            </ul>

            <!-- Программы → Школа бизнес-психологии -->
            <ul class="nav-panel" id="bp" data-level="2" data-title="Школа бизнес-психологии" hidden>
                <li><a href="#">Интегральная онтопсихология в практике бизнеса.</a></li>
                <li><a href="#">Forma mentis предпринимателя: ключевые факторы успеха.</a></li>
            </ul>

            <!-- Программы → Школа интегральной онтопсихологии -->
            <ul class="nav-panel" id="io" data-level="2" data-title="Школа интегральной онтопсихологии" hidden>
                <li><a href="#">Интегральная онтопсихология: теория и практика.</a></li>
            </ul>

            <!-- Программы → Школа лидерства -->
            <ul class="nav-panel" id="leader" data-level="2" data-title="Школа лидерства" hidden>
                <li><a href="#">«Метафизика и практика лидерства»</a></li>
            </ul>

            <!-- Консультирование -->
            <ul class="nav-panel" id="consulting" data-level="1" data-title="Консультирование" hidden>
                <li><a href="#">Индивидуальное консультирование и коучинг</a></li>
                <li><a href="#">Управленческий консалтинг и трекинг</a></li>
                <li><a href="#">Развивающие корпоративные мероприятия</a></li>
            </ul>

            <!-- Публикации -->
            <ul class="nav-panel" id="publications" data-level="1" data-title="Публикации" hidden>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Исследования</a></li>
            </ul>
        </nav>
    </aside>

    <div id="content" class="site-content">
