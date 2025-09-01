document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.getElementById('whatsapp-button');
    const whatsappTooltip = document.getElementById('whatsapp-tooltip');
    const tooltipClose = document.getElementById('tooltip-close');
    let tooltipTimeout;

    // Показать tooltip при клике на кнопку
    whatsappButton.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Закрыть tooltip если он уже открыт
        if (whatsappTooltip.classList.contains('active')) {
            hideTooltip();
            return;
        }
        
        showTooltip();
    });

    // Закрыть tooltip при клике на крестик
    tooltipClose.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        hideTooltip();
    });

    // Закрыть tooltip при клике вне его
    document.addEventListener('click', function(e) {
        if (!whatsappWidget.contains(e.target)) {
            hideTooltip();
        }
    });

    // Закрыть tooltip при нажатии Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            hideTooltip();
        }
    });

    // Автоматически показать tooltip через 3 секунды после загрузки страницы
    setTimeout(function() {
        if (!localStorage.getItem('whatsapp-tooltip-shown')) {
            showTooltip();
            localStorage.setItem('whatsapp-tooltip-shown', 'true');
        }
    }, 3000);

    // Показать tooltip при скролле вниз (если он не был показан ранее)
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Показать tooltip при скролле вниз более чем на 50% высоты экрана
        if (scrollTop > window.innerHeight * 0.5 && 
            scrollTop > lastScrollTop && 
            !whatsappTooltip.classList.contains('active') &&
            !localStorage.getItem('whatsapp-tooltip-shown')) {
            
            showTooltip();
            localStorage.setItem('whatsapp-tooltip-shown', 'true');
        }
        
        lastScrollTop = scrollTop;
    });

    function showTooltip() {
        whatsappTooltip.classList.add('active');
        
        // Автоматически скрыть через 8 секунд
        tooltipTimeout = setTimeout(function() {
            hideTooltip();
        }, 8000);
    }

    function hideTooltip() {
        whatsappTooltip.classList.remove('active');
        if (tooltipTimeout) {
            clearTimeout(tooltipTimeout);
        }
    }

    // Анимация пульсации кнопки
    function addPulseAnimation() {
        whatsappButton.style.animation = 'pulse 2s infinite';
    }

    // Убрать анимацию пульсации
    function removePulseAnimation() {
        whatsappButton.style.animation = '';
    }

    // Добавить пульсацию через 5 секунд, если tooltip не был показан
    setTimeout(function() {
        if (!localStorage.getItem('whatsapp-tooltip-shown')) {
            addPulseAnimation();
        }
    }, 5000);

    // Убрать пульсацию при показе tooltip
    whatsappButton.addEventListener('click', function() {
        removePulseAnimation();
    });

    // Добавить CSS анимацию пульсации
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 20px rgba(37, 211, 102, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 4px 25px rgba(37, 211, 102, 0.5);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 4px 20px rgba(37, 211, 102, 0.3);
            }
        }
    `;
    document.head.appendChild(style);
});
