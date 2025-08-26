    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-main">
            <div class="container">
                <div class="footer-content">
                    <!-- Информация о школе -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                ?>
                                <h3 class="site-title">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                        <?php bloginfo('name'); ?>
                                    </a>
                                </h3>
                            <?php } ?>
                        </div>
                        <p class="footer-description">
                            Профессиональное обучение психологии с практическим подходом. 
                            Получите качественное образование и станьте востребованным специалистом.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="ВКонтакте">
                                <i class="icon-vk"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Telegram">
                                <i class="icon-telegram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="WhatsApp">
                                <i class="icon-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Программы обучения -->
                    <div class="footer-widget">
                        <h3 class="widget-title">Программы обучения</h3>
                        <ul class="footer-menu">
                            <li><a href="<?php echo esc_url(home_url('/courses')); ?>">Все программы</a></li>
                            <li><a href="#">Практическая психология</a></li>
                            <li><a href="#">Детская психология</a></li>
                            <li><a href="#">Семейная психология</a></li>
                            <li><a href="#">Клиническая психология</a></li>
                        </ul>
                    </div>

                    <!-- Информация -->
                    <div class="footer-widget">
                        <h3 class="widget-title">Информация</h3>
                        <ul class="footer-menu">
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">О школе</a></li>
                            <li><a href="<?php echo esc_url(home_url('/teachers')); ?>">Преподаватели</a></li>
                            <li><a href="<?php echo esc_url(home_url('/testimonials')); ?>">Отзывы</a></li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Блог</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Контакты</a></li>
                        </ul>
                    </div>

                    <!-- Контакты -->
                    <div class="footer-widget">
                        <h3 class="widget-title">Контакты</h3>
                        <div class="contact-info">
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
                            <div class="contact-item">
                                <i class="icon-time"></i>
                                <div>
                                    <strong>Режим работы:</strong>
                                    <span>Пн-Пт: 9:00 - 18:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижняя часть подвала -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
                    </div>
                    <div class="footer-links">
                        <a href="<?php echo esc_url(home_url('/privacy')); ?>">Политика конфиденциальности</a>
                        <a href="<?php echo esc_url(home_url('/terms')); ?>">Условия использования</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Кнопка "Наверх" -->
    <button id="back-to-top" class="back-to-top" aria-label="Наверх">
        <i class="icon-arrow-up"></i>
    </button>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


