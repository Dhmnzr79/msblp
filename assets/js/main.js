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
     * Слайдер курсов
     */
    function initCoursesSlider() {
        const wrap = document.getElementById('courses-slider');
        if (!wrap) return;
        
        const track = wrap.querySelector('.slider-track');
        const cards = () => Array.from(track.children);
        const prevBtn = wrap.querySelector('[data-dir="prev"]');
        const nextBtn = wrap.querySelector('[data-dir="next"]');
        const dotsBox = wrap.querySelector('.slider-dots');

        let index = 0;
        let itemsPerView = getItemsPerView();
        let pages = calcPages();

        function getItemsPerView() {
            if (window.matchMedia('(max-width: 680px)').matches) return 1;
            if (window.matchMedia('(max-width: 960px)').matches) return 2;
            return 3;
        }
        
        function calcPages() {
            const total = cards().length;
            return Math.max(1, Math.ceil(total / itemsPerView));
        }

        function update() {
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            const viewport = wrap.querySelector('.slider-viewport');
            const viewportWidth = viewport.clientWidth;

            const offset = index * (viewportWidth + 0);
            track.style.transform = `translate3d(${-offset}px,0,0)`;

            const onMobile = window.matchMedia('(max-width: 680px)').matches;
            if (!onMobile) {
                prevBtn.disabled = index <= 0;
                nextBtn.disabled = index >= pages - 1;
            }

            updateDots();
        }

        function go(to) {
            index = Math.max(0, Math.min(pages - 1, to));
            update();
        }

        // Стрелки
        prevBtn.addEventListener('click', () => go(index - 1));
        nextBtn.addEventListener('click', () => go(index + 1));

        // Точки (для мобилки)
        function renderDots() {
            dotsBox.innerHTML = '';
            for (let i = 0; i < pages; i++) {
                const b = document.createElement('button');
                b.className = 'slider-dot';
                b.type = 'button';
                b.role = 'tab';
                b.setAttribute('aria-label', `Страница ${i+1}`);
                b.addEventListener('click', () => go(i));
                dotsBox.appendChild(b);
            }
        }
        
        function updateDots() {
            const dots = Array.from(dotsBox.children);
            dots.forEach((d, i) => d.setAttribute('aria-current', i === index ? 'true' : 'false'));
        }

        // Свайп (мобилка)
        let startX = 0, currentX = 0, dragging = false, startTransform = 0;

        track.addEventListener('pointerdown', (e) => {
            if (!window.matchMedia('(max-width: 680px)').matches) return;
            dragging = true;
            track.setPointerCapture(e.pointerId);
            startX = e.clientX;
            const m = /translate3d\((-?\d+\.?\d*)px/.exec(getComputedStyle(track).transform);
            startTransform = m ? parseFloat(m[1]) : 0;
            track.style.transition = 'none';
        });
        
        track.addEventListener('pointermove', (e) => {
            if (!dragging) return;
            currentX = e.clientX;
            const dx = currentX - startX;
            track.style.transform = `translate3d(${startTransform + dx}px,0,0)`;
        });
        
        const endDrag = (e) => {
            if (!dragging) return;
            dragging = false;
            track.style.transition = 'transform .35s ease';
            const dx = (currentX || startX) - startX;
            const threshold = 40;
            if (dx < -threshold) go(index + 1);
            else if (dx > threshold) go(index - 1);
            else update();
        };
        
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointercancel', endDrag);
        track.addEventListener('pointerleave', endDrag);

        // Пересчёт при ресайзе
        const reflow = () => {
            itemsPerView = getItemsPerView();
            pages = calcPages();
            index = Math.min(index, pages - 1);
            renderDots();
            update();
        };
        
        window.addEventListener('resize', reflow);

        // Инициализация
        reflow();
    }



    /**
     * Слайдер преподавателей
     */
    function initTeachersSlider() {
        const wrap = document.getElementById('teachers-slider');
        if (!wrap) return;
        
        const track = wrap.querySelector('.slider-track');
        const cards = () => Array.from(track.children);
        const prevBtn = wrap.querySelector('[data-dir="prev"]');
        const nextBtn = wrap.querySelector('[data-dir="next"]');
        const dotsBox = wrap.querySelector('.slider-dots');

        let index = 0;
        let itemsPerView = getItemsPerView();
        let pages = calcPages();

        function getItemsPerView() {
            if (window.matchMedia('(max-width: 680px)').matches) return 1;
            if (window.matchMedia('(max-width: 960px)').matches) return 2;
            return 3;
        }
        
        function calcPages() {
            const total = cards().length;
            return Math.max(1, Math.ceil(total / itemsPerView));
        }

        function update() {
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            const viewport = wrap.querySelector('.slider-viewport');
            const viewportWidth = viewport.clientWidth;

            const offset = index * (viewportWidth + 0);
            track.style.transform = `translate3d(${-offset}px,0,0)`;

            const onMobile = window.matchMedia('(max-width: 680px)').matches;
            if (!onMobile) {
                prevBtn.disabled = index <= 0;
                nextBtn.disabled = index >= pages - 1;
            }

            updateDots();
        }

        function go(to) {
            index = Math.max(0, Math.min(pages - 1, to));
            update();
        }

        // Стрелки
        prevBtn.addEventListener('click', () => go(index - 1));
        nextBtn.addEventListener('click', () => go(index + 1));

        // Точки (для мобилки)
        function renderDots() {
            dotsBox.innerHTML = '';
            for (let i = 0; i < pages; i++) {
                const b = document.createElement('button');
                b.className = 'slider-dot';
                b.type = 'button';
                b.role = 'tab';
                b.setAttribute('aria-label', `Страница ${i+1}`);
                b.addEventListener('click', () => go(i));
                dotsBox.appendChild(b);
            }
        }
        
        function updateDots() {
            const dots = Array.from(dotsBox.children);
            dots.forEach((d, i) => d.setAttribute('aria-current', i === index ? 'true' : 'false'));
        }

        // Свайп (мобилка)
        let startX = 0, currentX = 0, dragging = false, startTransform = 0;

        track.addEventListener('pointerdown', (e) => {
            if (!window.matchMedia('(max-width: 680px)').matches) return;
            dragging = true;
            track.setPointerCapture(e.pointerId);
            startX = e.clientX;
            const m = /translate3d\((-?\d+\.?\d*)px/.exec(getComputedStyle(track).transform);
            startTransform = m ? parseFloat(m[1]) : 0;
            track.style.transition = 'none';
        });
        
        track.addEventListener('pointermove', (e) => {
            if (!dragging) return;
            currentX = e.clientX;
            const dx = currentX - startX;
            track.style.transform = `translate3d(${startTransform + dx}px,0,0)`;
        });
        
        const endDrag = (e) => {
            if (!dragging) return;
            dragging = false;
            track.style.transition = 'transform .35s ease';
            const dx = (currentX || startX) - startX;
            const threshold = 40;
            if (dx < -threshold) go(index + 1);
            else if (dx > threshold) go(index - 1);
            else update();
        };
        
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointercancel', endDrag);
        track.addEventListener('pointerleave', endDrag);

        // Пересчёт при ресайзе
        const reflow = () => {
            itemsPerView = getItemsPerView();
            pages = calcPages();
            index = Math.min(index, pages - 1);
            renderDots();
            update();
        };
        
        window.addEventListener('resize', reflow);

        // Инициализация
        reflow();
    }

    /**
     * Слайдер отзывов
     */
    function initTestimonialsSlider() {
        const wrap = document.getElementById('testimonials-slider');
        if (!wrap) return;
        
        const track = wrap.querySelector('.slider-track');
        const cards = () => Array.from(track.children);
        const prevBtn = wrap.querySelector('[data-dir="prev"]');
        const nextBtn = wrap.querySelector('[data-dir="next"]');
        const dotsBox = wrap.querySelector('.slider-dots');

        let index = 0;
        let itemsPerView = getItemsPerView();
        let pages = calcPages();

        function getItemsPerView() {
            if (window.matchMedia('(max-width: 680px)').matches) return 1;
            if (window.matchMedia('(max-width: 960px)').matches) return 2;
            return 3;
        }
        
        function calcPages() {
            const total = cards().length;
            return Math.max(1, Math.ceil(total / itemsPerView));
        }

        function update() {
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            const viewport = wrap.querySelector('.slider-viewport');
            const viewportWidth = viewport.clientWidth;

            const offset = index * (viewportWidth + 0);
            track.style.transform = `translate3d(${-offset}px,0,0)`;

            const onMobile = window.matchMedia('(max-width: 680px)').matches;
            if (!onMobile) {
                prevBtn.disabled = index <= 0;
                nextBtn.disabled = index >= pages - 1;
            }

            updateDots();
        }

        function go(to) {
            index = Math.max(0, Math.min(pages - 1, to));
            update();
        }

        // Стрелки
        prevBtn.addEventListener('click', () => go(index - 1));
        nextBtn.addEventListener('click', () => go(index + 1));

        // Точки (для мобилки)
        function renderDots() {
            dotsBox.innerHTML = '';
            for (let i = 0; i < pages; i++) {
                const b = document.createElement('button');
                b.className = 'slider-dot';
                b.type = 'button';
                b.role = 'tab';
                b.setAttribute('aria-label', `Страница ${i+1}`);
                b.addEventListener('click', () => go(i));
                dotsBox.appendChild(b);
            }
        }
        
        function updateDots() {
            const dots = Array.from(dotsBox.children);
            dots.forEach((d, i) => d.setAttribute('aria-current', i === index ? 'true' : 'false'));
        }

        // Свайп (мобилка)
        let startX = 0, currentX = 0, dragging = false, startTransform = 0;

        track.addEventListener('pointerdown', (e) => {
            if (!window.matchMedia('(max-width: 680px)').matches) return;
            dragging = true;
            track.setPointerCapture(e.pointerId);
            startX = e.clientX;
            const m = /translate3d\((-?\d+\.?\d*)px/.exec(getComputedStyle(track).transform);
            startTransform = m ? parseFloat(m[1]) : 0;
            track.style.transition = 'none';
        });
        
        track.addEventListener('pointermove', (e) => {
            if (!dragging) return;
            currentX = e.clientX;
            const dx = currentX - startX;
            track.style.transform = `translate3d(${startTransform + dx}px,0,0)`;
        });
        
        const endDrag = (e) => {
            if (!dragging) return;
            dragging = false;
            track.style.transition = 'transform .35s ease';
            const dx = (currentX || startX) - startX;
            const threshold = 40;
            if (dx < -threshold) go(index + 1);
            else if (dx > threshold) go(index - 1);
            else update();
        };
        
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointercancel', endDrag);
        track.addEventListener('pointerleave', endDrag);

        // Пересчёт при ресайзе
        const reflow = () => {
            itemsPerView = getItemsPerView();
            pages = calcPages();
            index = Math.min(index, pages - 1);
            renderDots();
            update();
        };
        
        window.addEventListener('resize', reflow);

        // Инициализация
        reflow();
    }





    /**
     * Умное позиционирование выпадающих меню
     */
    function initSmartMenuPositioning() {
        const SAFE = 8; // отступ от края
        
        document.querySelectorAll('.menu-item-has-children').forEach(item => {
            const panel = item.querySelector(':scope > .sub-menu');
            if (!panel) return;
            
            const place = () => {
                panel.classList.remove('sub-menu--left');
                
                // посчитать после показа (или временно показать off-screen)
                panel.style.visibility = 'hidden';
                panel.style.display = 'block';
                
                const r = panel.getBoundingClientRect();
                const overflowRight = r.right > window.innerWidth - SAFE;
                
                if (overflowRight) panel.classList.add('sub-menu--left');
                
                panel.style.removeProperty('visibility');
                panel.style.removeProperty('display');
            };
            
            item.addEventListener('mouseenter', place);
            item.addEventListener('focusin', place); // доступность с клавы
            window.addEventListener('resize', place);
        });
    }



    // Инициализация дополнительных функций при загрузке
    $(window).on('load', function() {
        initLazyLoading();
        initCounters();
        initCoursesSlider();
        initTeachersSlider();
        initTestimonialsSlider();
        initSmartMenuPositioning();
    });

})(jQuery);
