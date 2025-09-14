<?php get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- Hero секция -->
    <section class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/main-bg.jpg');">
        <div class="container">
            <div class="grid grid-12">
                <div class="hero-content" style="grid-column: 1 / 7;">
                    <h1>Высшая школа бизнес-психологии и международного лидерства им. Антонио Менегетти</h1>
                    
                    <!-- Плюсы школы -->
                    <div class="school-advantages">
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6066 3.75722L18.6882 18.688L3.75734 18.6065M17.6456 17.6455L2.42472 2.42459" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p>Наши студенты обучаются мышлению лидера и применяют его на практике, строят международные бизнесы и выводят на рынок инновации.</p>
                        </div>
                        
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6066 3.75722L18.6882 18.688L3.75734 18.6065M17.6456 17.6455L2.42472 2.42459" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p>Международный лидер - это не должность, а навык кооперирования стратегических и креативных задач. Возможность управлять людьми и вести переговоры на соответствующем уровне, независимо от текущих условий.</p>
                        </div>
                        
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6066 3.75722L18.6882 18.688L3.75734 18.6065M17.6456 17.6455L2.42472 2.42459" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p>Наши выпускники обладают набором универсальных инструментов, которые значительно упрощают процессы и содержат в себе все принципы построения международного бизнеса.</p>
                        </div>
                    </div>
                    
                    <div class="hero-buttons">
                        <button type="button" class="btn">
                            <span class="btn-text">Начать обучение</span>
                            <svg class="btn-arrow" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Курсы -->
    <section class="courses-section section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>Наши события</h2>
            </div>
            
            <div class="slider-wrap" id="courses-slider">
                <!-- Стрелки -->
                <div class="slider-controls">
                    <button class="slider-btn left" data-dir="prev" aria-label="Предыдущие">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 12H5M11 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="slider-btn right" data-dir="next" aria-label="Следующие">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Слайдер -->
                <div class="slider">
                    <div class="slider-viewport">
                        <div class="slider-track">
                                                         <!-- Карточка курса 1 -->
                             <div class="course-card">
                                 <div class="course-image">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kurs01.jpg" alt="Денежный тренинг">
                                 </div>
                                <div class="course-content">
                                    <h3 class="course-title">Денежный тренинг: «Я и деньги. Что было! Что есть! Что будет!»</h3>
                                    <div class="course-description">
                                        Тренинг предназначен для тех, кто желает обрести денежное благополучие, финансовую уверенность, изучить закон богатства, избавиться от безденежья и научиться привлекать деньги в свою жизнь
                                    </div>
                                    <div class="course-meta">
                                        <div class="course-meta-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar.svg" alt="Календарь" width="20" height="22">
                                            <span>18 января</span>
                                        </div>
                                        <div class="course-meta-item">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_590_2868)">
                                                    <path d="M9.42857 5.5C9.42857 5.29162 9.51135 5.09177 9.6587 4.94442C9.80605 4.79707 10.0059 4.71429 10.2143 4.71429C10.4227 4.71429 10.6225 4.79707 10.7699 4.94442C10.9172 5.09177 11 5.29162 11 5.5V11H14.1429C14.3512 11 14.5511 11.0828 14.6984 11.2301C14.8458 11.3775 14.9286 11.5773 14.9286 11.7857C14.9286 11.9941 14.8458 12.1939 14.6984 12.3413C14.5511 12.4886 14.3512 12.5714 14.1429 12.5714H10.2143C10.0059 12.5714 9.80605 12.4886 9.6587 12.3413C9.51135 12.1939 9.42857 11.9941 9.42857 11.7857V5.5ZM11 22C17.0751 22 22 17.0751 22 11C22 4.92486 17.0751 0 11 0C4.92486 0 0 4.92486 0 11C0 17.0751 4.92486 22 11 22ZM11 20.4286C5.79307 20.4286 1.57143 16.2069 1.57143 11C1.57143 5.79307 5.79307 1.57143 11 1.57143C16.2069 1.57143 20.4286 5.79307 20.4286 11C20.4286 16.2069 16.2069 20.4286 11 20.4286Z" fill="#0084FE"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_590_2868">
                                                        <rect width="22" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>6 часов</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                         <!-- Карточка курса 2 -->
                             <div class="course-card">
                                 <div class="course-image">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kurs02.jpg" alt="Психология бизнеса">
                                 </div>
                                <div class="course-content">
                                    <h3 class="course-title">Психология бизнеса: «Управление и лидерство»</h3>
                                    <div class="course-description">
                                        Программа для руководителей и предпринимателей, желающих развить лидерские качества, улучшить управленческие навыки и создать эффективную команду
                                    </div>
                                    <div class="course-meta">
                                        <div class="course-meta-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar.svg" alt="Календарь" width="20" height="22">
                                            <span>25 января</span>
                                        </div>
                                        <div class="course-meta-item">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_590_2868)">
                                                    <path d="M9.42857 5.5C9.42857 5.29162 9.51135 5.09177 9.6587 4.94442C9.80605 4.79707 10.0059 4.71429 10.2143 4.71429C10.4227 4.71429 10.6225 4.79707 10.7699 4.94442C10.9172 5.09177 11 5.29162 11 5.5V11H14.1429C14.3512 11 14.5511 11.0828 14.6984 11.2301C14.8458 11.3775 14.9286 11.5773 14.9286 11.7857C14.9286 11.9941 14.8458 12.1939 14.6984 12.3413C14.5511 12.4886 14.3512 12.5714 14.1429 12.5714H10.2143C10.0059 12.5714 9.80605 12.4886 9.6587 12.3413C9.51135 12.1939 9.42857 11.9941 9.42857 11.7857V5.5ZM11 22C17.0751 22 22 17.0751 22 11C22 4.92486 17.0751 0 11 0C4.92486 0 0 4.92486 0 11C0 17.0751 4.92486 22 11 22ZM11 20.4286C5.79307 20.4286 1.57143 16.2069 1.57143 11C1.57143 5.79307 5.79307 1.57143 11 1.57143C16.2069 1.57143 20.4286 5.79307 20.4286 11C20.4286 16.2069 16.2069 20.4286 11 20.4286Z" fill="#0084FE"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_590_2868">
                                                        <rect width="22" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>8 часов</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                         <!-- Карточка курса 3 -->
                             <div class="course-card">
                                 <div class="course-image">
                                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kurs03.jpg" alt="Интегральная психология">
                                 </div>
                                <div class="course-content">
                                    <h3 class="course-title">Интегральная психология: «Теория и практика»</h3>
                                    <div class="course-description">
                                        Глубокое изучение интегральной психологии с практическими техниками для личностного роста, самопознания и развития сознания
                                    </div>
                                    <div class="course-meta">
                                        <div class="course-meta-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/calendar.svg" alt="Календарь" width="20" height="22">
                                            <span>1 февраля</span>
                                        </div>
                                        <div class="course-meta-item">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_590_2868)">
                                                    <path d="M9.42857 5.5C9.42857 5.29162 9.51135 5.09177 9.6587 4.94442C9.80605 4.79707 10.0059 4.71429 10.2143 4.71429C10.4227 4.71429 10.6225 4.79707 10.7699 4.94442C10.9172 5.09177 11 5.29162 11 5.5V11H14.1429C14.3512 11 14.5511 11.0828 14.6984 11.2301C14.8458 11.3775 14.9286 11.5773 14.9286 11.7857C14.9286 11.9941 14.8458 12.1939 14.6984 12.3413C14.5511 12.4886 14.3512 12.5714 14.1429 12.5714H10.2143C10.0059 12.5714 9.80605 12.4886 9.6587 12.3413C9.51135 12.1939 9.42857 11.9941 9.42857 11.7857V5.5ZM11 22C17.0751 22 22 17.0751 22 11C22 4.92486 17.0751 0 11 0C4.92486 0 0 4.92486 0 11C0 17.0751 4.92486 22 11 22ZM11 20.4286C5.79307 20.4286 1.57143 16.2069 1.57143 11C1.57143 5.79307 5.79307 1.57143 11 1.57143C16.2069 1.57143 20.4286 5.79307 20.4286 11C20.4286 16.2069 16.2069 20.4286 11 20.4286Z" fill="#0084FE"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_590_2868">
                                                        <rect width="22" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>12 часов</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Точки (показываются только на мобиле через CSS) -->
                <div class="slider-dots" aria-label="Пагинация" role="tablist"></div>
            </div>
        </div>
    </section>

    <!-- О школе -->
    <section class="about-school-section section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>О школе</h2>
            </div>
            
            <div class="grid grid-2">
                <div class="about-image animate-on-scroll animate-fadeInLeft">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/osrt.jpg" alt="О школе" class="lazy">
                </div>
                
                <div class="about-content animate-on-scroll animate-fadeInRight">
                    <h3>Миссия:</h3>
                    <p>Формировать новое поколение лидеров, которые, раскрывая свой потенциал, меняют себя — и вместе с этим трансформируют бизнес, команды, семьи и мир вокруг.</p>
                    
                    <h3>Цели:</h3>
                    <ul>
                        <li>Помочь людям любого возраста и профессии — от студентов до предпринимателей — раскрыть свои сильные стороны и двигаться к личному успеху.</li>
                        <li>Дать опору в виде универсальных жизненных ценностей, актуальных в XXI веке, чтобы человек знал, зачем он живёт и к чему идёт.</li>
                        <li>Повышать устойчивость и эффективность лидеров, команд и организаций в условиях глобальных перемен.</li>
                        <li>Развивать духовный интеллект, эмоциональную зрелость и креативное мышление — как основу лидерства нового времени.</li>
                        <li>Содействовать глубинным личным и социальным изменениям, чтобы человек мог жить осмысленно, свободно, с радостью и пользой для других.</li>
                    </ul>
                    
                    <div class="signature">
                        <div class="signature-name">Александр Островский</div>
                        <div class="signature-title">Руководитель Meneghetti School for Business Psychology and Leadership</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Что мы на самом деле делаем -->
    <section class="what-we-do-section section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>Что мы на самом деле делаем</h2>
                <p>Не просто обучаем — меняем мышление, усиливаем людей и задаём вектор</p>
            </div>
            
            <div class="what-we-do-grid">
                <div class="card-item card-1 animate-on-scroll animate-delay-100">
                    <div class="card-number">01.</div>
                    <p>Распространяем идеи осознанного лидерства, онтологического мышления и глубинных ценностей среди тех, кто влияет: предпринимателей, коучей, экспертов, управленцев, преподавателей.</p>
                </div>
                
                <div class="card-item card-2 animate-on-scroll animate-delay-200">
                    <div class="card-number">02.</div>
                    <p>Даём современные подходы, проверенные инструменты и живую практику, чтобы люди и организации могли быть жизнеспособными, эффективными, адаптивными.</p>
                </div>
                
                <div class="card-item card-3 animate-on-scroll animate-delay-300">
                    <div class="card-number">03.</div>
                    <p>Работаем с тем, что внутри: зачем ты живёшь, куда идёшь, какие ценности двигают тобой. Это даёт энергию, фокус и ясность в действиях.</p>
                </div>
                
                <div class="card-item card-4 animate-on-scroll animate-delay-400">
                    <div class="card-number">04.</div>
                    <p>Настоящие лидеры — не те, у кого должность, а те, кто меняют себя и вдохновляют других. Мы учим быть такими — через работу над собой и развитие духовного интеллекта.</p>
                </div>
                
                <div class="what-we-do-image animate-on-scroll animate-fadeInScale animate-delay-500">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bg03.jpg" alt="Что мы делаем" class="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="features-section section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-item animate-on-scroll animate-delay-100">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon01.svg" alt="Знания от практиков">
                    </div>
                    <h3 class="feature-title">Знания от практиков</h3>
                    <p class="feature-text">Наши преподаватели являются действующими международными предпринимателями</p>
                </div>
                
                <div class="feature-item animate-on-scroll animate-delay-200">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon02.svg" alt="Оптимальные программы">
                    </div>
                    <h3 class="feature-title">Оптимальные программы</h3>
                    <p class="feature-text">Все наши курсы рассчитаны на 2-4 месяца. Как правило, это достаточное количество времени, чтобы получить первые результаты изменений</p>
                </div>
                
                <div class="feature-item animate-on-scroll animate-delay-300">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon03.svg" alt="Готовим профессионалов">
                    </div>
                    <h3 class="feature-title">Готовим профессионалов</h3>
                    <p class="feature-text">Наши выпускники известные люди, которые достигли значительных достижений в карьере и росте бизнеса</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Преподаватели -->
    <section class="teachers-section section">
        <div class="container">
            <div class="section-title">
                <h2>Наши преподаватели</h2>
                <p>Эксперты с международным опытом в области психологии и бизнеса</p>
            </div>
            
            <div class="slider-wrap" id="teachers-slider">
                <!-- Стрелки -->
                <div class="slider-controls">
                    <button class="slider-btn left" data-dir="prev" aria-label="Предыдущие">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 12H5M11 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="slider-btn right" data-dir="next" aria-label="Следующие">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Слайдер -->
                <div class="slider">
                    <div class="slider-viewport">
                        <div class="slider-track">
                <?php
                $teachers = new WP_Query(array(
                    'post_type' => 'teachers',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key' => '_teacher_show_in_slider',
                                        'value' => '1',
                                        'compare' => '='
                                    )
                                ),
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ));

                if ($teachers->have_posts()) :
                    while ($teachers->have_posts()) : $teachers->the_post();
                                    $short_description = get_post_meta(get_the_ID(), '_teacher_short_description', true);
                                    $position = get_post_meta(get_the_ID(), '_teacher_position', true);
                        ?>
                                    <article class="teacher-card">
                                        <div class="teacher-media">
                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-placeholder.jpg" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                            <svg class="teacher-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_590_3007)">
                                                    <rect x="9" y="11" width="29" height="29" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C27.1517 48 30.2726 47.3792 33.1844 46.1731C36.0962 44.967 38.742 43.1992 40.9706 40.9706C43.1992 38.742 44.967 36.0962 46.1731 33.1844C47.3792 30.2726 48 27.1517 48 24C48 20.8483 47.3792 17.7274 46.1731 14.8156C44.967 11.9038 43.1992 9.25804 40.9706 7.02944C38.742 4.80083 36.0962 3.033 33.1844 1.82689C30.2726 0.620778 27.1517 -4.69644e-08 24 0C17.6348 9.48488e-08 11.5303 2.52856 7.02944 7.02944C2.52856 11.5303 0 17.6348 0 24C0 30.3652 2.52856 36.4697 7.02944 40.9706C11.5303 45.4714 17.6348 48 24 48ZM23.3813 33.7067L36.7147 17.7067L32.6187 14.2933L21.152 28.0507L15.2187 22.1147L11.448 25.8853L19.448 33.8853L21.512 35.9493L23.3813 33.7067Z" fill="#0084FE"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_590_3007">
                                                        <rect width="48" height="48" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                </div>
                                        <div class="teacher-body">
                                <h3 class="teacher-name"><?php the_title(); ?></h3>
                                            <?php if ($position) : ?>
                                                <p class="teacher-position"><?php echo esc_html($position); ?></p>
                                            <?php endif; ?>
                                            <?php if ($short_description) : ?>
                                                <p class="teacher-role"><?php echo esc_html($short_description); ?></p>
                                    <?php endif; ?>
                                            <p class="teacher-meta"><?php the_excerpt(); ?></p>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                                // Если нет преподавателей, показываем заглушки
                                ?>
                                <article class="teacher-card">
                                    <div class="teacher-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-placeholder.jpg" alt="Александр Островский">
                                        <svg class="teacher-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_590_3007)">
                                                <rect x="9" y="11" width="29" height="29" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C27.1517 48 30.2726 47.3792 33.1844 46.1731C36.0962 44.967 38.742 43.1992 40.9706 40.9706C43.1992 38.742 44.967 36.0962 46.1731 33.1844C47.3792 30.2726 48 27.1517 48 24C48 20.8483 47.3792 17.7274 46.1731 14.8156C44.967 11.9038 43.1992 9.25804 40.9706 7.02944C38.742 4.80083 36.0962 3.033 33.1844 1.82689C30.2726 0.620778 27.1517 -4.69644e-08 24 0C17.6348 9.48488e-08 11.5303 2.52856 7.02944 7.02944C2.52856 11.5303 0 17.6348 0 24C0 30.3652 2.52856 36.4697 7.02944 40.9706C11.5303 45.4714 17.6348 48 24 48ZM23.3813 33.7067L36.7147 17.7067L32.6187 14.2933L21.152 28.0507L15.2187 22.1147L11.448 25.8853L19.448 33.8853L21.512 35.9493L23.3813 33.7067Z" fill="#0084FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_590_3007">
                                                    <rect width="48" height="48" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="teacher-body">
                                        <h3 class="teacher-name">Александр Островский</h3>
                                        <p class="teacher-position">Руководитель школы</p>
                                        <p class="teacher-role">Эксперт по интегральной онтопсихологии</p>
                                        <p class="teacher-meta">Более 15 лет опыта в области психологии бизнеса и лидерства. Автор множества методик и подходов к развитию лидерских качеств.</p>
                                    </div>
                                </article>
                                
                                <article class="teacher-card">
                                    <div class="teacher-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-placeholder.jpg" alt="Мария Петрова">
                                        <svg class="teacher-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_590_3007)">
                                                <rect x="9" y="11" width="29" height="29" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C27.1517 48 30.2726 47.3792 33.1844 46.1731C36.0962 44.967 38.742 43.1992 40.9706 40.9706C43.1992 38.742 44.967 36.0962 46.1731 33.1844C47.3792 30.2726 48 27.1517 48 24C48 20.8483 47.3792 17.7274 46.1731 14.8156C44.967 11.9038 43.1992 9.25804 40.9706 7.02944C38.742 4.80083 36.0962 3.033 33.1844 1.82689C30.2726 0.620778 27.1517 -4.69644e-08 24 0C17.6348 9.48488e-08 11.5303 2.52856 7.02944 7.02944C2.52856 11.5303 0 17.6348 0 24C0 30.3652 2.52856 36.4697 7.02944 40.9706C11.5303 45.4714 17.6348 48 24 48ZM23.3813 33.7067L36.7147 17.7067L32.6187 14.2933L21.152 28.0507L15.2187 22.1147L11.448 25.8853L19.448 33.8853L21.512 35.9493L23.3813 33.7067Z" fill="#0084FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_590_3007">
                                                    <rect width="48" height="48" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="teacher-body">
                                        <h3 class="teacher-name">Мария Петрова</h3>
                                        <p class="teacher-position">Старший преподаватель</p>
                                        <p class="teacher-role">Специалист по психологии управления и командной работе</p>
                                        <p class="teacher-meta">Эксперт в области организационной психологии с опытом работы в международных компаниях. Специализируется на развитии команд и лидерских навыков.</p>
                                    </div>
                                </article>
                                
                                <article class="teacher-card">
                                    <div class="teacher-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-placeholder.jpg" alt="Дмитрий Сидоров">
                                        <svg class="teacher-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_590_3007)">
                                                <rect x="9" y="11" width="29" height="29" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C27.1517 48 30.2726 47.3792 33.1844 46.1731C36.0962 44.967 38.742 43.1992 40.9706 40.9706C43.1992 38.742 44.967 36.0962 46.1731 33.1844C47.3792 30.2726 48 27.1517 48 24C48 20.8483 47.3792 17.7274 46.1731 14.8156C44.967 11.9038 43.1992 9.25804 40.9706 7.02944C38.742 4.80083 36.0962 3.033 33.1844 1.82689C30.2726 0.620778 27.1517 -4.69644e-08 24 0C17.6348 9.48488e-08 11.5303 2.52856 7.02944 7.02944C2.52856 11.5303 0 17.6348 0 24C0 30.3652 2.52856 36.4697 7.02944 40.9706C11.5303 45.4714 17.6348 48 24 48ZM23.3813 33.7067L36.7147 17.7067L32.6187 14.2933L21.152 28.0507L15.2187 22.1147L11.448 25.8853L19.448 33.8853L21.512 35.9493L23.3813 33.7067Z" fill="#0084FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_590_3007">
                                                    <rect width="48" height="48" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="teacher-body">
                                        <h3 class="teacher-name">Дмитрий Сидоров</h3>
                                        <p class="teacher-position">Практикующий психолог</p>
                                        <p class="teacher-role">Коуч по личностному развитию</p>
                                        <p class="teacher-meta">Сертифицированный коуч с многолетним опытом работы с предпринимателями и руководителями. Автор программ по развитию эмоционального интеллекта.</p>
                                    </div>
                                </article>
                                
                                <article class="teacher-card">
                                    <div class="teacher-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-placeholder.jpg" alt="Елена Козлова">
                                        <svg class="teacher-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_590_3007)">
                                                <rect x="9" y="11" width="29" height="29" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 48C27.1517 48 30.2726 47.3792 33.1844 46.1731C36.0962 44.967 38.742 43.1992 40.9706 40.9706C43.1992 38.742 44.967 36.0962 46.1731 33.1844C47.3792 30.2726 48 27.1517 48 24C48 20.8483 47.3792 17.7274 46.1731 14.8156C44.967 11.9038 43.1992 9.25804 40.9706 7.02944C38.742 4.80083 36.0962 3.033 33.1844 1.82689C30.2726 0.620778 27.1517 -4.69644e-08 24 0C17.6348 9.48488e-08 11.5303 2.52856 7.02944 7.02944C2.52856 11.5303 0 17.6348 0 24C0 30.3652 2.52856 36.4697 7.02944 40.9706C11.5303 45.4714 17.6348 48 24 48ZM23.3813 33.7067L36.7147 17.7067L32.6187 14.2933L21.152 28.0507L15.2187 22.1147L11.448 25.8853L19.448 33.8853L21.512 35.9493L23.3813 33.7067Z" fill="#0084FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_590_3007">
                                                    <rect width="48" height="48" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="teacher-body">
                                        <h3 class="teacher-name">Елена Козлова</h3>
                                        <p class="teacher-position">Доктор психологических наук</p>
                                        <p class="teacher-role">Специалист по нейропсихологии и когнитивному развитию</p>
                                        <p class="teacher-meta">Доктор психологических наук с 20-летним опытом в области нейропсихологии. Эксперт по развитию когнитивных способностей и работе с памятью.</p>
                                    </div>
                                </article>
                                <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Точки (показываются только на мобиле через CSS) -->
                <div class="slider-dots" aria-label="Пагинация" role="tablist"></div>
            </div>
        </div>
    </section>

    <!-- Статистика -->
    <section class="statistics-section section">
        <div class="container">
            <div class="stats-grid">
                <article class="stat-card">
                    <svg class="stat-icon" width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_590_2992)">
                            <path d="M25.4531 0.171021H10.5469C4.722 0.171021 0 5.23474 0 11.4812V27.4661C0 33.7126 4.722 38.7763 10.5469 38.7763H25.4531C31.278 38.7763 36 33.7126 36 27.4661V11.4812C36 5.23474 31.278 0.171021 25.4531 0.171021Z" fill="#2492FF"/>
                            <path d="M23.8493 17.2916L17.2927 24.3227C16.6064 25.0586 15.4934 25.0586 14.8064 24.3227L12.1507 21.4748C11.4645 20.7389 11.4645 19.5453 12.1507 18.8094C12.837 18.0727 13.95 18.0727 14.637 18.8094L16.0495 20.3242L21.363 14.6262C22.0493 13.8902 23.1623 13.8902 23.8493 14.6262C24.5355 15.3621 24.5355 16.5557 23.8493 17.2916ZM9.91406 7.03253H26.0859C28.0273 7.03253 29.6016 8.72076 29.6016 10.8026V28.1448C29.6016 30.2266 28.0273 31.9148 26.0859 31.9148H9.91406C7.97273 31.9148 6.39844 30.2266 6.39844 28.1448V10.8026C6.39844 8.72076 7.97273 7.03253 9.91406 7.03253ZM26.0859 26.2598V12.6876C26.0859 11.6463 25.2991 10.8026 24.3281 10.8026H11.6719C10.7009 10.8026 9.91406 11.6463 9.91406 12.6876V26.2598C9.91406 27.301 10.7009 28.1448 11.6719 28.1448H24.3281C25.2991 28.1448 26.0859 27.301 26.0859 26.2598Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_590_2992">
                                <rect width="36" height="38.6053" fill="white" transform="translate(0 0.171021)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="stat-number" data-target="4">0</h3>
                    <p class="stat-text">4 месяца курса достаточно для полной трансформации мышления</p>
                </article>

                <article class="stat-card">
                    <svg class="stat-icon" width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_590_2992)">
                            <path d="M25.4531 0.171021H10.5469C4.722 0.171021 0 5.23474 0 11.4812V27.4661C0 33.7126 4.722 38.7763 10.5469 38.7763H25.4531C31.278 38.7763 36 33.7126 36 27.4661V11.4812C36 5.23474 31.278 0.171021 25.4531 0.171021Z" fill="#2492FF"/>
                            <path d="M23.8493 17.2916L17.2927 24.3227C16.6064 25.0586 15.4934 25.0586 14.8064 24.3227L12.1507 21.4748C11.4645 20.7389 11.4645 19.5453 12.1507 18.8094C12.837 18.0727 13.95 18.0727 14.637 18.8094L16.0495 20.3242L21.363 14.6262C22.0493 13.8902 23.1623 13.8902 23.8493 14.6262C24.5355 15.3621 24.5355 16.5557 23.8493 17.2916ZM9.91406 7.03253H26.0859C28.0273 7.03253 29.6016 8.72076 29.6016 10.8026V28.1448C29.6016 30.2266 28.0273 31.9148 26.0859 31.9148H9.91406C7.97273 31.9148 6.39844 30.2266 6.39844 28.1448V10.8026C6.39844 8.72076 7.97273 7.03253 9.91406 7.03253ZM26.0859 26.2598V12.6876C26.0859 11.6463 25.2991 10.8026 24.3281 10.8026H11.6719C10.7009 10.8026 9.91406 11.6463 9.91406 12.6876V26.2598C9.91406 27.301 10.7009 28.1448 11.6719 28.1448H24.3281C25.2991 28.1448 26.0859 27.301 26.0859 26.2598Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_590_2992">
                                <rect width="36" height="38.6053" fill="white" transform="translate(0 0.171021)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="stat-number" data-target="17000">0</h3>
                    <p class="stat-text">17 000 выпускников по всему миру</p>
                </article>

                <article class="stat-card">
                    <svg class="stat-icon" width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_590_2992)">
                            <path d="M25.4531 0.171021H10.5469C4.722 0.171021 0 5.23474 0 11.4812V27.4661C0 33.7126 4.722 38.7763 10.5469 38.7763H25.4531C31.278 38.7763 36 33.7126 36 27.4661V11.4812C36 5.23474 31.278 0.171021 25.4531 0.171021Z" fill="#2492FF"/>
                            <path d="M23.8493 17.2916L17.2927 24.3227C16.6064 25.0586 15.4934 25.0586 14.8064 24.3227L12.1507 21.4748C11.4645 20.7389 11.4645 19.5453 12.1507 18.8094C12.837 18.0727 13.95 18.0727 14.637 18.8094L16.0495 20.3242L21.363 14.6262C22.0493 13.8902 23.1623 13.8902 23.8493 14.6262C24.5355 15.3621 24.5355 16.5557 23.8493 17.2916ZM9.91406 7.03253H26.0859C28.0273 7.03253 29.6016 8.72076 29.6016 10.8026V28.1448C29.6016 30.2266 28.0273 31.9148 26.0859 31.9148H9.91406C7.97273 31.9148 6.39844 30.2266 6.39844 28.1448V10.8026C6.39844 8.72076 7.97273 7.03253 9.91406 7.03253ZM26.0859 26.2598V12.6876C26.0859 11.6463 25.2991 10.8026 24.3281 10.8026H11.6719C10.7009 10.8026 9.91406 11.6463 9.91406 12.6876V26.2598C9.91406 27.301 10.7009 28.1448 11.6719 28.1448H24.3281C25.2991 28.1448 26.0859 27.301 26.0859 26.2598Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_590_2992">
                                <rect width="36" height="38.6053" fill="white" transform="translate(0 0.171021)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="stat-number" data-target="74">0</h3>
                    <p class="stat-text">В 74 странах, включая все передовые державы, наши методы являются одними из самых эффективных</p>
                </article>

                <article class="stat-card">
                    <svg class="stat-icon" width="36" height="39" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_590_2992)">
                            <path d="M25.4531 0.171021H10.5469C4.722 0.171021 0 5.23474 0 11.4812V27.4661C0 33.7126 4.722 38.7763 10.5469 38.7763H25.4531C31.278 38.7763 36 33.7126 36 27.4661V11.4812C36 5.23474 31.278 0.171021 25.4531 0.171021Z" fill="#2492FF"/>
                            <path d="M23.8493 17.2916L17.2927 24.3227C16.6064 25.0586 15.4934 25.0586 14.8064 24.3227L12.1507 21.4748C11.4645 20.7389 11.4645 19.5453 12.1507 18.8094C12.837 18.0727 13.95 18.0727 14.637 18.8094L16.0495 20.3242L21.363 14.6262C22.0493 13.8902 23.1623 13.8902 23.8493 14.6262C24.5355 15.3621 24.5355 16.5557 23.8493 17.2916ZM9.91406 7.03253H26.0859C28.0273 7.03253 29.6016 8.72076 29.6016 10.8026V28.1448C29.6016 30.2266 28.0273 31.9148 26.0859 31.9148H9.91406C7.97273 31.9148 6.39844 30.2266 6.39844 28.1448V10.8026C6.39844 8.72076 7.97273 7.03253 9.91406 7.03253ZM26.0859 26.2598V12.6876C26.0859 11.6463 25.2991 10.8026 24.3281 10.8026H11.6719C10.7009 10.8026 9.91406 11.6463 9.91406 12.6876V26.2598C9.91406 27.301 10.7009 28.1448 11.6719 28.1448H24.3281C25.2991 28.1448 26.0859 27.301 26.0859 26.2598Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_590_2992">
                                <rect width="36" height="38.6053" fill="white" transform="translate(0 0.171021)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="stat-number" data-target="56">0</h3>
                    <p class="stat-text">56 лет средний возраст наших выпускников. Рекомендуемый возраст для поступления: от 28 - ми лет</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Сертификаты -->
    <section class="certificates-section section">
        <div class="container">
            <div class="section-title">
                <h2>Сертификаты и лицензии</h2>
            </div>
            
            <div class="certificates-gallery">
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
                <div class="certificate-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/licence.jpg" alt="Лицензия">
                </div>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section class="testimonials-section section">
        <div class="container">
            <div class="section-title">
                <h2>Отзывы выпускников</h2>
            </div>
            
            <div class="slider-wrap" id="testimonials-slider">
                <!-- Стрелки -->
                <div class="slider-controls">
                    <button class="slider-btn left" data-dir="prev" aria-label="Предыдущие">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 12H5M11 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="slider-btn right" data-dir="next" aria-label="Следующие">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Слайдер -->
                <div class="slider">
                    <div class="slider-viewport">
                        <div class="slider-track">
                <?php
                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonials',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key' => '_testimonial_show_in_slider',
                                        'value' => '1',
                                        'compare' => '='
                                    )
                                ),
                                'orderby' => 'menu_order',
                                'order' => 'ASC'
                ));

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                                    $author_name = get_post_meta(get_the_ID(), '_testimonial_author_name', true);
                                    ?>
                                    <article class="testimonial-card">
                                        <div class="testimonial-media">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array('alt' => $author_name ?: get_the_title())); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-placeholder.jpg" alt="<?php echo $author_name ?: get_the_title(); ?>">
                                            <?php endif; ?>
                                            <svg class="testimonial-icon" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <ellipse cx="21.5" cy="22.5" rx="13.5" ry="9.5" fill="white"/>
                                                <path d="M0 21.5C0 31.8899 9.62663 40.3125 21.5 40.3125C23.6296 40.3172 25.7504 40.0407 27.8076 39.4901C29.3771 40.2856 32.981 41.8121 39.044 42.8065C39.5815 42.8925 39.99 42.3335 39.7777 41.8336C38.8263 39.5869 37.9663 36.593 37.7083 33.8625C41.0005 30.5569 43 26.23 43 21.5C43 11.1101 33.3734 2.6875 21.5 2.6875C9.62663 2.6875 0 11.1101 0 21.5ZM23.6661 18.1836C23.8435 17.9194 24.0479 17.6744 24.2762 17.4526C24.6368 17.0845 25.0647 16.7889 25.5366 16.5819L25.5581 16.5711C26.195 16.2768 26.8883 16.1246 27.5899 16.125C30.1645 16.125 32.25 18.1299 32.25 20.6051C32.25 23.0776 30.1645 25.0824 27.5899 25.0824C26.6681 25.0824 25.8108 24.8271 25.0878 24.3837C25.456 25.4291 26.1359 26.5444 27.2647 27.6624C27.371 27.7662 27.455 27.8907 27.5114 28.0281C27.5678 28.1656 27.5954 28.3131 27.5927 28.4616C27.5899 28.6102 27.5568 28.7566 27.4953 28.8918C27.4338 29.0271 27.3452 29.1483 27.2351 29.2481C26.7702 29.6781 26.0338 29.6646 25.585 29.2212C21.9999 25.6495 21.9031 21.8091 23.0561 19.2613C23.226 18.885 23.4302 18.5251 23.6661 18.1863V18.1836ZM13.4375 24.3837C13.803 25.4291 14.4856 26.5444 15.6144 27.6624C15.7205 27.7664 15.8043 27.891 15.8605 28.0285C15.9166 28.1661 15.9441 28.3137 15.941 28.4622C15.938 28.6108 15.9046 28.7571 15.8429 28.8923C15.7812 29.0274 15.6924 29.1485 15.5821 29.2481C15.1199 29.6781 14.3835 29.6646 13.9347 29.2212C10.3496 25.6495 10.2528 21.8091 11.4031 19.2613C11.5738 18.8849 11.7789 18.525 12.0158 18.1863C12.193 17.9211 12.3975 17.6752 12.6259 17.4526C12.9865 17.0845 13.4144 16.7889 13.8863 16.5819L13.9078 16.5711C14.5439 16.2772 15.2362 16.125 15.9369 16.125C18.5088 16.125 20.597 18.1299 20.597 20.6051C20.597 23.0776 18.5088 25.0824 15.9369 25.0824C15.0151 25.0824 14.1577 24.8271 13.4348 24.3837H13.4375Z" fill="#0084FE"/>
                                            </svg>
                                        </div>
                                        <div class="testimonial-body">
                                <?php the_content(); ?>
                                <div class="testimonial-author">
                                                <h3 class="testimonial-name"><?php echo $author_name ?: get_the_title(); ?></h3>
                                                <p class="testimonial-role">Выпускник программы</p>
                                </div>
                            </div>
                                    </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                                // Если нет отзывов, показываем заглушки
                                ?>
                                <article class="testimonial-card">
                                    <div class="testimonial-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otz01.jpg" alt="Анна Смирнова">
                                        <svg class="testimonial-icon" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="21.5" cy="22.5" rx="13.5" ry="9.5" fill="white"/>
                                            <path d="M0 21.5C0 31.8899 9.62663 40.3125 21.5 40.3125C23.6296 40.3172 25.7504 40.0407 27.8076 39.4901C29.3771 40.2856 32.981 41.8121 39.044 42.8065C39.5815 42.8925 39.99 42.3335 39.7777 41.8336C38.8263 39.5869 37.9663 36.593 37.7083 33.8625C41.0005 30.5569 43 26.23 43 21.5C43 11.1101 33.3734 2.6875 21.5 2.6875C9.62663 2.6875 0 11.1101 0 21.5ZM23.6661 18.1836C23.8435 17.9194 24.0479 17.6744 24.2762 17.4526C24.6368 17.0845 25.0647 16.7889 25.5366 16.5819L25.5581 16.5711C26.195 16.2768 26.8883 16.1246 27.5899 16.125C30.1645 16.125 32.25 18.1299 32.25 20.6051C32.25 23.0776 30.1645 25.0824 27.5899 25.0824C26.6681 25.0824 25.8108 24.8271 25.0878 24.3837C25.456 25.4291 26.1359 26.5444 27.2647 27.6624C27.371 27.7662 27.455 27.8907 27.5114 28.0281C27.5678 28.1656 27.5954 28.3131 27.5927 28.4616C27.5899 28.6102 27.5568 28.7566 27.4953 28.8918C27.4338 29.0271 27.3452 29.1483 27.2351 29.2481C26.7702 29.6781 26.0338 29.6646 25.585 29.2212C21.9999 25.6495 21.9031 21.8091 23.0561 19.2613C23.226 18.885 23.4302 18.5251 23.6661 18.1863V18.1836ZM13.4375 24.3837C13.803 25.4291 14.4856 26.5444 15.6144 27.6624C15.7205 27.7664 15.8043 27.891 15.8605 28.0285C15.9166 28.1661 15.9441 28.3137 15.941 28.4622C15.938 28.6108 15.9046 28.7571 15.8429 28.8923C15.7812 29.0274 15.6924 29.1485 15.5821 29.2481C15.1199 29.6781 14.3835 29.6646 13.9347 29.2212C10.3496 25.6495 10.2528 21.8091 11.4031 19.2613C11.5738 18.8849 11.7789 18.525 12.0158 18.1863C12.193 17.9211 12.3975 17.6752 12.6259 17.4526C12.9865 17.0845 13.4144 16.7889 13.8863 16.5819L13.9078 16.5711C14.5439 16.2772 15.2362 16.125 15.9369 16.125C18.5088 16.125 20.597 18.1299 20.597 20.6051C20.597 23.0776 18.5088 25.0824 15.9369 25.0824C15.0151 25.0824 14.1577 24.8271 13.4348 24.3837H13.4375Z" fill="#0084FE"/>
                                        </svg>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>"Обучение в школе полностью изменило мой подход к лидерству. Теперь я понимаю, что настоящий лидер - это тот, кто сначала работает над собой, а потом вдохновляет других."</p>
                                        <div class="testimonial-author">
                                            <h3 class="testimonial-name">Анна Смирнова</h3>
                                            <p class="testimonial-role">Выпускник программы</p>
                                        </div>
                                    </div>
                                </article>
                                
                                <article class="testimonial-card">
                                    <div class="testimonial-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otz02.jpg" alt="Дмитрий Козлов">
                                        <svg class="testimonial-icon" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="21.5" cy="22.5" rx="13.5" ry="9.5" fill="white"/>
                                            <path d="M0 21.5C0 31.8899 9.62663 40.3125 21.5 40.3125C23.6296 40.3172 25.7504 40.0407 27.8076 39.4901C29.3771 40.2856 32.981 41.8121 39.044 42.8065C39.5815 42.8925 39.99 42.3335 39.7777 41.8336C38.8263 39.5869 37.9663 36.593 37.7083 33.8625C41.0005 30.5569 43 26.23 43 21.5C43 11.1101 33.3734 2.6875 21.5 2.6875C9.62663 2.6875 0 11.1101 0 21.5ZM23.6661 18.1836C23.8435 17.9194 24.0479 17.6744 24.2762 17.4526C24.6368 17.0845 25.0647 16.7889 25.5366 16.5819L25.5581 16.5711C26.195 16.2768 26.8883 16.1246 27.5899 16.125C30.1645 16.125 32.25 18.1299 32.25 20.6051C32.25 23.0776 30.1645 25.0824 27.5899 25.0824C26.6681 25.0824 25.8108 24.8271 25.0878 24.3837C25.456 25.4291 26.1359 26.5444 27.2647 27.6624C27.371 27.7662 27.455 27.8907 27.5114 28.0281C27.5678 28.1656 27.5954 28.3131 27.5927 28.4616C27.5899 28.6102 27.5568 28.7566 27.4953 28.8918C27.4338 29.0271 27.3452 29.1483 27.2351 29.2481C26.7702 29.6781 26.0338 29.6646 25.585 29.2212C21.9999 25.6495 21.9031 21.8091 23.0561 19.2613C23.226 18.885 23.4302 18.5251 23.6661 18.1863V18.1836ZM13.4375 24.3837C13.803 25.4291 14.4856 26.5444 15.6144 27.6624C15.7205 27.7664 15.8043 27.891 15.8605 28.0285C15.9166 28.1661 15.9441 28.3137 15.941 28.4622C15.938 28.6108 15.9046 28.7571 15.8429 28.8923C15.7812 29.0274 15.6924 29.1485 15.5821 29.2481C15.1199 29.6781 14.3835 29.6646 13.9347 29.2212C10.3496 25.6495 10.2528 21.8091 11.4031 19.2613C11.5738 18.8849 11.7789 18.525 12.0158 18.1863C12.193 17.9211 12.3975 17.6752 12.6259 17.4526C12.9865 17.0845 13.4144 16.7889 13.8863 16.5819L13.9078 16.5711C14.5439 16.2772 15.2362 16.125 15.9369 16.125C18.5088 16.125 20.597 18.1299 20.597 20.6051C20.597 23.0776 18.5088 25.0824 15.9369 25.0824C15.0151 25.0824 14.1577 24.8271 13.4348 24.3837H13.4375Z" fill="#0084FE"/>
                                        </svg>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>"Практические инструменты, которые я получил здесь, помогли мне вывести свою команду на новый уровень. Рекомендую всем, кто хочет развиваться как лидер."</p>
                                        <div class="testimonial-author">
                                            <h3 class="testimonial-name">Дмитрий Козлов</h3>
                                            <p class="testimonial-role">Выпускник программы</p>
                                        </div>
                                    </div>
                                </article>
                                
                                <article class="testimonial-card">
                                    <div class="testimonial-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otz03.jpg" alt="Мария Петрова">
                                        <svg class="testimonial-icon" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="21.5" cy="22.5" rx="13.5" ry="9.5" fill="white"/>
                                            <path d="M0 21.5C0 31.8899 9.62663 40.3125 21.5 40.3125C23.6296 40.3172 25.7504 40.0407 27.8076 39.4901C29.3771 40.2856 32.981 41.8121 39.044 42.8065C39.5815 42.8925 39.99 42.3335 39.7777 41.8336C38.8263 39.5869 37.9663 36.593 37.7083 33.8625C41.0005 30.5569 43 26.23 43 21.5C43 11.1101 33.3734 2.6875 21.5 2.6875C9.62663 2.6875 0 11.1101 0 21.5ZM23.6661 18.1836C23.8435 17.9194 24.0479 17.6744 24.2762 17.4526C24.6368 17.0845 25.0647 16.7889 25.5366 16.5819L25.5581 16.5711C26.195 16.2768 26.8883 16.1246 27.5899 16.125C30.1645 16.125 32.25 18.1299 32.25 20.6051C32.25 23.0776 30.1645 25.0824 27.5899 25.0824C26.6681 25.0824 25.8108 24.8271 25.0878 24.3837C25.456 25.4291 26.1359 26.5444 27.2647 27.6624C27.371 27.7662 27.455 27.8907 27.5114 28.0281C27.5678 28.1656 27.5954 28.3131 27.5927 28.4616C27.5899 28.6102 27.5568 28.7566 27.4953 28.8918C27.4338 29.0271 27.3452 29.1483 27.2351 29.2481C26.7702 29.6781 26.0338 29.6646 25.585 29.2212C21.9999 25.6495 21.9031 21.8091 23.0561 19.2613C23.226 18.885 23.4302 18.5251 23.6661 18.1863V18.1836ZM13.4375 24.3837C13.803 25.4291 14.4856 26.5444 15.6144 27.6624C15.7205 27.7664 15.8043 27.891 15.8605 28.0285C15.9166 28.1661 15.9441 28.3137 15.941 28.4622C15.938 28.6108 15.9046 28.7571 15.8429 28.8923C15.7812 29.0274 15.6924 29.1485 15.5821 29.2481C15.1199 29.6781 14.3835 29.6646 13.9347 29.2212C10.3496 25.6495 10.2528 21.8091 11.4031 19.2613C11.5738 18.8849 11.7789 18.525 12.0158 18.1863C12.193 17.9211 12.3975 17.6752 12.6259 17.4526C12.9865 17.0845 13.4144 16.7889 13.8863 16.5819L13.9078 16.5711C14.5439 16.2772 15.2362 16.125 15.9369 16.125C18.5088 16.125 20.597 18.1299 20.597 20.6051C20.597 23.0776 18.5088 25.0824 15.9369 25.0824C15.0151 25.0824 14.1577 24.8271 13.4348 24.3837H13.4375Z" fill="#0084FE"/>
                                        </svg>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>"Школа дала мне не только знания, но и новое видение себя как лидера. Теперь я уверенно управляю своей командой и достигаю поставленных целей."</p>
                                        <div class="testimonial-author">
                                            <h3 class="testimonial-name">Мария Петрова</h3>
                                            <p class="testimonial-role">Выпускник программы</p>
                                        </div>
                                    </div>
                                </article>
                                
                                <article class="testimonial-card">
                                    <div class="testimonial-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/otz04.jpg" alt="Сергей Иванов">
                                        <svg class="testimonial-icon" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="21.5" cy="22.5" rx="13.5" ry="9.5" fill="white"/>
                                            <path d="M0 21.5C0 31.8899 9.62663 40.3125 21.5 40.3125C23.6296 40.3172 25.7504 40.0407 27.8076 39.4901C29.3771 40.2856 32.981 41.8121 39.044 42.8065C39.5815 42.8925 39.99 42.3335 39.7777 41.8336C38.8263 39.5869 37.9663 36.593 37.7083 33.8625C41.0005 30.5569 43 26.23 43 21.5C43 11.1101 33.3734 2.6875 21.5 2.6875C9.62663 2.6875 0 11.1101 0 21.5ZM23.6661 18.1836C23.8435 17.9194 24.0479 17.6744 24.2762 17.4526C24.6368 17.0845 25.0647 16.7889 25.5366 16.5819L25.5581 16.5711C26.195 16.2768 26.8883 16.1246 27.5899 16.125C30.1645 16.125 32.25 18.1299 32.25 20.6051C32.25 23.0776 30.1645 25.0824 27.5899 25.0824C26.6681 25.0824 25.8108 24.8271 25.0878 24.3837C25.456 25.4291 26.1359 26.5444 27.2647 27.6624C27.371 27.7662 27.455 27.8907 27.5114 28.0281C27.5678 28.1656 27.5954 28.3131 27.5927 28.4616C27.5899 28.6102 27.5568 28.7566 27.4953 28.8918C27.4338 29.0271 27.3452 29.1483 27.2351 29.2481C26.7702 29.6781 26.0338 29.6646 25.585 29.2212C21.9999 25.6495 21.9031 21.8091 23.0561 19.2613C23.226 18.885 23.4302 18.5251 23.6661 18.1863V18.1836ZM13.4375 24.3837C13.803 25.4291 14.4856 26.5444 15.6144 27.6624C15.7205 27.7664 15.8043 27.891 15.8605 28.0285C15.9166 28.1661 15.9441 28.3137 15.941 28.4622C15.938 28.6108 15.9046 28.7571 15.8429 28.8923C15.7812 29.0274 15.6924 29.1485 15.5821 29.2481C15.1199 29.6781 14.3835 29.6646 13.9347 29.2212C10.3496 25.6495 10.2528 21.8091 11.4031 19.2613C11.5738 18.8849 11.7789 18.525 12.0158 18.1863C12.193 17.9211 12.3975 17.6752 12.6259 17.4526C12.9865 17.0845 13.4144 16.7889 13.8863 16.5819L13.9078 16.5711C14.5439 16.2772 15.2362 16.125 15.9369 16.125C18.5088 16.125 20.597 18.1299 20.597 20.6051C20.597 23.0776 18.5088 25.0824 15.9369 25.0824C15.0151 25.0824 14.1577 24.8271 13.4348 24.3837H13.4375Z" fill="#0084FE"/>
                                        </svg>
                                    </div>
                                    <div class="testimonial-body">
                                        <p>"Благодаря обучению я научился лучше понимать себя и свою команду. Это помогло создать более эффективную рабочую среду и достичь лучших результатов."</p>
                                        <div class="testimonial-author">
                                            <h3 class="testimonial-name">Сергей Иванов</h3>
                                            <p class="testimonial-role">Выпускник программы</p>
                                        </div>
                                    </div>
                                </article>
                                <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Точки (показываются только на мобиле через CSS) -->
                <div class="slider-dots" aria-label="Пагинация" role="tablist"></div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="contact-section section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Свяжитесь с нами</h2>
                    <p>Остались вопросы? Мы готовы помочь! Задайте любой вопрос, оставьте свои контакты и мы проконсультируем вас по любому вопросу.</p>
                </div>
                <div class="contact-form">
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ваше имя *" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Телефон *" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Сообщение *" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Отправить сообщение</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>
