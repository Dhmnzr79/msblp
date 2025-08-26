/**
 * Основной JavaScript файл темы Психологическая Школа
 */

(function($) {
    'use strict';

    // Документ готов
    $(document).ready(function() {
        
        // Мобильное меню
        initMobileMenu();
        
        // Кнопка "Наверх"
        initBackToTop();
        
        // Плавная прокрутка для якорных ссылок
        initSmoothScroll();
        
        // Анимации при скролле
        initScrollAnimations();
        
        // Формы
        initForms();
        
    });

    /**
     * Инициализация мобильного меню
     */
    function initMobileMenu() {
        const $menuToggle = $('.menu-toggle');
        const $mobileMenu = $('.mobile-menu-overlay');
        const $mobileMenuClose = $('.mobile-menu-close');

        $menuToggle.on('click', function() {
            $mobileMenu.addClass('active');
            $('body').addClass('menu-open');
        });

        $mobileMenuClose.on('click', function() {
            $mobileMenu.removeClass('active');
            $('body').removeClass('menu-open');
        });

        // Закрытие по клику вне меню
        $mobileMenu.on('click', function(e) {
            if (e.target === this) {
                $mobileMenu.removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Закрытие по Escape
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && $mobileMenu.hasClass('active')) {
                $mobileMenu.removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Мобильные подменю
        $('.mobile-menu-toggle').on('click', function(e) {
            e.preventDefault();
            const $this = $(this);
            const $subMenu = $this.next('.mobile-sub-menu');
            
            $this.toggleClass('active');
            $subMenu.toggleClass('active');
        });
    }

    /**
     * Инициализация кнопки "Наверх"
     */
    function initBackToTop() {
        const $backToTop = $('#back-to-top');
        const showOffset = 300;

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > showOffset) {
                $backToTop.addClass('visible');
            } else {
                $backToTop.removeClass('visible');
            }
        });

        $backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 600);
        });
    }

    /**
     * Плавная прокрутка для якорных ссылок
     */
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: target.offset().top - 80 // Учитываем высоту шапки
                }, 600);
            }
        });
    }

    /**
     * Анимации при скролле
     */
    function initScrollAnimations() {
        const $animatedElements = $('.animate-on-scroll');
        
        function checkScroll() {
            $animatedElements.each(function() {
                const $element = $(this);
                const elementTop = $element.offset().top;
                const elementBottom = elementTop + $element.outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $element.addClass('animated');
                }
            });
        }

        $(window).on('scroll', checkScroll);
        checkScroll(); // Проверяем при загрузке
    }

    /**
     * Инициализация форм
     */
    function initForms() {
        // Валидация форм
        $('form').on('submit', function(e) {
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"], input[type="submit"]');
            
            // Простая валидация email
            const $emailFields = $form.find('input[type="email"]');
            $emailFields.each(function() {
                const email = $(this).val();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (email && !emailRegex.test(email)) {
                    e.preventDefault();
                    $(this).addClass('error');
                    showMessage('Пожалуйста, введите корректный email', 'error');
                    return false;
                } else {
                    $(this).removeClass('error');
                }
            });

            // Показываем индикатор загрузки
            if (!$form.hasClass('error')) {
                $submitBtn.prop('disabled', true).text('Отправка...');
            }
        });

        // Убираем ошибки при вводе
        $('input, textarea').on('input', function() {
            $(this).removeClass('error');
        });
    }

    /**
     * Показ сообщений
     */
    function showMessage(message, type = 'info') {
        const $message = $(`
            <div class="message message-${type}">
                <span>${message}</span>
                <button class="message-close">&times;</button>
            </div>
        `);

        $('body').append($message);
        
        // Автоматическое скрытие
        setTimeout(function() {
            $message.addClass('fade-out');
            setTimeout(function() {
                $message.remove();
            }, 300);
        }, 5000);

        // Закрытие по клику
        $message.find('.message-close').on('click', function() {
            $message.addClass('fade-out');
            setTimeout(function() {
                $message.remove();
            }, 300);
        });
    }

    /**
     * Ленивая загрузка изображений
     */
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Счетчик чисел для статистики
     */
    function initCounters() {
        const $counters = $('.stat-number');
        
        // Создаем Intersection Observer для анимации при появлении в viewport
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const $counter = $(entry.target);
                    const target = parseInt($counter.attr('data-target'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;

                    const timer = setInterval(function() {
                        current += step;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        $counter.text(Math.floor(current));
                    }, 16);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        $counters.each(function() {
            observer.observe(this);
        });
    }

    /**
     * Слайдер отзывов
     */
    function initTestimonialsSlider() {
        const $slider = $('.testimonials-slider');
        
        if ($slider.length) {
            $slider.slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
    }

    /**
     * Слайдер курсов
     */
    function initCoursesSlider() {
        const $slider = $('.courses-slider .grid');
        const $prevBtn = $('#prevCourses');
        const $nextBtn = $('#nextCourses');
        
        if ($slider.length && $prevBtn.length && $nextBtn.length) {
            let currentSlide = 0;
            const totalSlides = $slider.children().length;
            const slidesToShow = 3;
            const maxSlides = totalSlides - slidesToShow;
            
            // Показываем/скрываем кнопки
            function updateButtons() {
                $prevBtn.toggle(currentSlide > 0);
                $nextBtn.toggle(currentSlide < maxSlides);
            }
            
            // Переход к слайду
            function goToSlide(slideIndex) {
                currentSlide = Math.max(0, Math.min(slideIndex, maxSlides));
                const translateX = -currentSlide * (100 / slidesToShow);
                $slider.css('transform', `translateX(${translateX}%)`);
                updateButtons();
            }
            
            // Обработчики кнопок
            $prevBtn.on('click', function() {
                goToSlide(currentSlide - 1);
            });
            
            $nextBtn.on('click', function() {
                goToSlide(currentSlide + 1);
            });
            
            // Инициализация
            updateButtons();
            
            // Автоматическое переключение каждые 5 секунд
            setInterval(function() {
                if (currentSlide < maxSlides) {
                    goToSlide(currentSlide + 1);
                } else {
                    goToSlide(0);
                }
            }, 5000);
        }
    }

    // Инициализация дополнительных функций при загрузке
    $(window).on('load', function() {
        initLazyLoading();
        initCounters();
        initTestimonialsSlider();
        initCoursesSlider();
    });

})(jQuery);
