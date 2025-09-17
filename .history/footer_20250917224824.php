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
                                        MSBPL
                                    </a>
                                </h3>
                            <?php } ?>
                        </div>
                        <p class="footer-description">
                            Meneghetti School for Business Psychology and Leadership
                        </p>

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

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- WhatsApp Widget -->
<div class="whatsapp-widget" id="whatsapp-widget">
    <div class="whatsapp-button" id="whatsapp-button" aria-label="Написать в WhatsApp">
        <svg class="whatsapp-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" fill="currentColor"/>
        </svg>
        <span class="whatsapp-text">Написать</span>
    </div>
    
    <!-- Tooltip -->
    <div class="whatsapp-tooltip" id="whatsapp-tooltip">
        <div class="tooltip-content">
            <div class="tooltip-header">
                <div class="tooltip-avatar">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" fill="#25D366"/>
                    </svg>
                </div>
                <div class="tooltip-info">
                    <h4>WhatsApp</h4>
                    <p>Обычно отвечает в течение часа</p>
                </div>
                <button class="tooltip-close" id="tooltip-close" aria-label="Закрыть">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="tooltip-message">
                <p>Привет! 👋 Готовы ответить на ваши вопросы о программах обучения.</p>
            </div>
            <a href="https://wa.me/79991234567?text=Здравствуйте!%20Интересует%20обучение%20в%20школе%20бизнес-психологии" 
               class="whatsapp-link" 
               target="_blank" 
               rel="noopener noreferrer"
               aria-label="Открыть WhatsApp чат">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" fill="#25D366"/>
                </svg>
                Начать чат
            </a>
        </div>
    </div>
</div>

</body>
</html>


