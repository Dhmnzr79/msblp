<?php get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- Hero секция -->
    <section class="hero-section">
        <div class="container">
            <div class="grid grid-12">
                <div class="hero-content" style="grid-column: 1 / 7;">
                    <h1>Психологическая школа</h1>
                    <p>Профессиональное обучение психологии с практическим подходом. Получите качественное образование и станьте востребованным специалистом.</p>
                    <div class="hero-buttons">
                        <a href="#teachers" class="btn">Наши преподаватели</a>
                        <a href="#contact" class="btn btn-secondary">Связаться с нами</a>
                    </div>
                </div>
                <div class="hero-image" style="grid-column: 7 / 13;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg" alt="Психологическая школа">
                </div>
            </div>
        </div>
    </section>

    <!-- Курсы -->
    <section class="courses-section section">
        <div class="container">
            <div class="section-title">
                <h2>Наши события</h2>
            </div>
            
            <div class="courses-slider">
                <div class="grid grid-3">
                    <!-- Карточка курса 1 -->
                    <div class="course-card">
                        <div class="course-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.jpg" alt="Денежный тренинг">
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">Денежный тренинг: «Я и деньги. Что было! Что есть! Что будет!»</h3>
                            <div class="course-description">
                                Тренинг предназначен для тех, кто желает обрести денежное благополучие, финансовую уверенность, изучить закон богатства, избавиться от безденежья и научиться привлекать деньги в свою жизнь
                            </div>
                            <div class="course-meta">
                                <div class="course-meta-item">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_663_2610)">
                                            <path d="M1 9.625H19M15 1.625V5.625M5 1.625V5.625M15 3.625H5C3.93913 3.625 2.92172 4.04643 2.17157 4.79657C1.42143 5.54672 1 6.56413 1 7.625V16.375C1 17.4359 1.42143 18.4533 2.17157 19.2034C2.92172 19.9536 3.93913 20.375 5 20.375H15C16.0609 20.375 17.0783 19.9536 17.8284 19.2034C18.5786 18.4533 19 17.4359 19 16.375V7.625C19 6.56413 18.5786 5.54672 17.8284 4.79657C17.0783 4.04643 16.0609 3.625 15 3.625Z" stroke="#0084FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_663_2610">
                                                <rect width="20" height="22" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-2.jpg" alt="Психология бизнеса">
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">Психология бизнеса: «Управление и лидерство»</h3>
                            <div class="course-description">
                                Программа для руководителей и предпринимателей, желающих развить лидерские качества, улучшить управленческие навыки и создать эффективную команду
                            </div>
                            <div class="course-meta">
                                <div class="course-meta-item">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_663_2610)">
                                            <path d="M1 9.625H19M15 1.625V5.625M5 1.625V5.625M15 3.625H5C3.93913 3.625 2.92172 4.04643 2.17157 4.79657C1.42143 5.54672 1 6.56413 1 7.625V16.375C1 17.4359 1.42143 18.4533 2.17157 19.2034C2.92172 19.9536 3.93913 20.375 5 20.375H15C16.0609 20.375 17.0783 19.9536 17.8284 19.2034C18.5786 18.4533 19 17.4359 19 16.375V7.625C19 6.56413 18.5786 5.54672 17.8284 4.79657C17.0783 4.04643 16.0609 3.625 15 3.625Z" stroke="#0084FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_663_2610">
                                                <rect width="20" height="22" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-3.jpg" alt="Интегральная психология">
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">Интегральная психология: «Теория и практика»</h3>
                            <div class="course-description">
                                Глубокое изучение интегральной психологии с практическими техниками для личностного роста, самопознания и развития сознания
                            </div>
                            <div class="course-meta">
                                <div class="course-meta-item">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_663_2610)">
                                            <path d="M1 9.625H19M15 1.625V5.625M5 1.625V5.625M15 3.625H5C3.93913 3.625 2.92172 4.04643 2.17157 4.79657C1.42143 5.54672 1 6.56413 1 7.625V16.375C1 17.4359 1.42143 18.4533 2.17157 19.2034C2.92172 19.9536 3.93913 20.375 5 20.375H15C16.0609 20.375 17.0783 19.9536 17.8284 19.2034C18.5786 18.4533 19 17.4359 19 16.375V7.625C19 6.56413 18.5786 5.54672 17.8284 4.79657C17.0783 4.04643 16.0609 3.625 15 3.625Z" stroke="#0084FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_663_2610">
                                                <rect width="20" height="22" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
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

                <!-- Навигация слайдера -->
                <div class="courses-slider-nav">
                    <button id="prevCourses" class="slider-arrow left">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 12H5M11 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button id="nextCourses" class="slider-arrow right">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- О школе -->
    <section class="about-school-section section">
        <div class="container">
            <div class="section-title">
                <h2>О школе</h2>
            </div>
            
            <div class="grid grid-2">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-school.jpg" alt="О школе">
                </div>
                
                <div class="about-content">
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
            <div class="section-title">
                <h2>Что мы на самом деле делаем</h2>
                <p>Не просто обучаем — меняем мышление, усиливаем людей и задаём вектор</p>
            </div>
            
            <div class="what-we-do-grid">
                <div class="card-item card-1">
                    <div class="card-number">01.</div>
                    <div class="card-text">Распространяем идеи осознанного лидерства, онтологического мышления и глубинных ценностей среди тех, кто влияет: предпринимателей, коучей, экспертов, управленцев, преподавателей.</div>
                </div>
                
                <div class="card-item card-2">
                    <div class="card-number">02.</div>
                    <div class="card-text">Даём современные подходы, проверенные инструменты и живую практику, чтобы люди и организации могли быть жизнеспособными, эффективными, адаптивными.</div>
                </div>
                
                <div class="card-item card-3">
                    <div class="card-number">03.</div>
                    <div class="card-text">Работаем с тем, что внутри: зачем ты живёшь, куда идёшь, какие ценности двигают тобой. Это даёт энергию, фокус и ясность в действиях.</div>
                </div>
                
                <div class="card-item card-4">
                    <div class="card-number">04.</div>
                    <div class="card-text">Настоящие лидеры — не те, у кого должность, а те, кто меняют себя и вдохновляют других. Мы учим быть такими — через работу над собой и развитие духовного интеллекта.</div>
                </div>
                
                <div class="what-we-do-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-we-do.jpg" alt="Что мы делаем">
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="features-section section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon01.svg" alt="Знания от практиков">
                    </div>
                    <h3 class="feature-title">Знания от практиков</h3>
                    <p class="feature-text">Наши преподаватели являются действующими международными предпринимателями</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon02.svg" alt="Оптимальные программы">
                    </div>
                    <h3 class="feature-title">Оптимальные программы</h3>
                    <p class="feature-text">Все наши курсы рассчитаны на 2-4 месяца. Как правило, это достаточное количество времени, чтобы получить первые результаты изменений</p>
                </div>
                
                <div class="feature-item">
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
    <section id="teachers" class="teachers-section section">
        <div class="container">
            <div class="section-title">
                <h2>Наши преподаватели</h2>
                <p>Опытные специалисты с многолетним стажем в психологии</p>
            </div>
            <div class="teachers-grid">
                <?php
                $teachers = new WP_Query(array(
                    'post_type' => 'teachers',
                    'posts_per_page' => 4,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ));

                if ($teachers->have_posts()) :
                    while ($teachers->have_posts()) : $teachers->the_post();
                        ?>
                        <article class="teacher-card card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="teacher-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="teacher-content">
                                <h3 class="teacher-name"><?php the_title(); ?></h3>
                                <div class="teacher-position"><?php echo get_post_meta(get_the_ID(), 'position', true); ?></div>
                                <div class="teacher-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="teacher-social">
                                    <?php if ($linkedin = get_post_meta(get_the_ID(), 'linkedin', true)) : ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" class="social-link" target="_blank">LinkedIn</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>Преподаватели пока не добавлены</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section class="testimonials-section section">
        <div class="container">
            <div class="section-title">
                <h2>Отзывы выпускников</h2>
                <p>Что говорят о нас наши студенты</p>
            </div>
            <div class="testimonials-slider">
                <?php
                $testimonials = new WP_Query(array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                        ?>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <div class="testimonial-text"><?php the_content(); ?></div>
                                <div class="testimonial-author">
                                    <div class="author-name"><?php the_title(); ?></div>
                                    <div class="author-position"><?php echo get_post_meta(get_the_ID(), 'position', true); ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>Отзывы пока не добавлены</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="contact-section section">
        <div class="container">
            <div class="section-title">
                <h2>Свяжитесь с нами</h2>
                <p>Остались вопросы? Мы готовы помочь!</p>
            </div>
            <div class="grid grid-12">
                <div class="contact-info" style="grid-column: 1 / 6;">
                    <h3>Контактная информация</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="icon-phone"></i>
                            <div>
                                <strong>Телефон:</strong>
                                <a href="tel:+79991234567">+7 (999) 123-45-67</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="icon-email"></i>
                            <div>
                                <strong>Email:</strong>
                                <a href="mailto:info@psych-school.ru">info@psych-school.ru</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="icon-location"></i>
                            <div>
                                <strong>Адрес:</strong>
                                <span>г. Москва, ул. Примерная, д. 123</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form" style="grid-column: 7 / 13;">
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Телефон">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Сообщение" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Отправить сообщение</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
